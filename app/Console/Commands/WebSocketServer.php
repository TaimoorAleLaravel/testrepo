<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\Server\IoServer;

use App\Models\Client;
use App\Models\Messages;
class WebSocketServer extends Command implements MessageComponentInterface
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'websocket:serve';
    protected $description = 'Start the WebSocket server';
    protected $clients;

    public function __construct()
    {
        parent::__construct();
        $this->clients = new \SplObjectStorage;
    }
    public function handle()
    {
        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    $this
                )
            ),
            8080
        );

        $this->info('WebSocket server started on port 8080');
        $server->run();
    }

    public function onOpen(ConnectionInterface $conn)
    {
        $this->clients->attach($conn);
        echo "New connection! message ({$conn->resourceId})\n";
        $conn->send(json_encode(['type' => 'resource_id', 'resource_id' => $conn->resourceId]));
    }
    private function formatTime($date)
    {
        $carbonDate = \Carbon\Carbon::parse($date);
            return $carbonDate->format('h:i A');
    }
    public function onMessage(ConnectionInterface $from, $message)
    {
        $data = json_decode($message, true);
        echo "Message received from connection {$from->resourceId}\n";
        
        if (isset($data['user_id'], $data['message'])) {
            // Sanitize inputs
            $userId = filter_var($data['user_id'], FILTER_SANITIZE_NUMBER_INT);
            $messageText = filter_var($data['message'], FILTER_SANITIZE_STRING);
            
            $clientRecord = Client::where('client_id', $userId)->first();
            
            if ($clientRecord) {
                $client = $clientRecord->toArray();
                $message = Messages::create([
                    'sender' => $userId,
                    'receiver' => $data['toSend'],  // Assuming 308 is a static receiver ID
                    'message' => $messageText,
                    'sender_role' => 'client',
                    'receiver_role' => 'counselor',
                ]);
                $time = $this->formatTime($message->timestamp);
                $receiver = Client::where('client_id', $message->receiver)->first();
                if ($message) {
                    $broadcastMessage = json_encode([
                        'user_id' => $client['client_id'],
                        'message' => $messageText,
                        'time' => $time
                    ]);
        
                    foreach ($this->clients as $connectedClient) {
                        if ($connectedClient->resourceId == $receiver->connection || $connectedClient === $from) {
                            $connectedClient->send($broadcastMessage);
                        }
                    }
                }
            } else {
                $from->send(json_encode(['error' => 'Client not found']));
            }
        } else {
            $from->send(json_encode(['error' => 'Invalid message format']));
        }
    }
    


    public function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);
        echo "Connection {$conn->resourceId} has disconnected\n";
        Client::where('connection', $conn->resourceId)->update(['connection' => NULL ]);
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "An error has occurred: {$e->getMessage()}\n";
        $conn->close();
    }
}
