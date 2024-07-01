<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Interface</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="" style="padding: 10px">
        {{ $data->client_email }}
    </div>
    <select name="" id="toSend">
        <option selected disabled>Select User</option>
        @foreach ($clients as $client)
            @if($client->client_id !== session()->get('client_id'))
            <option value="{{ $client->client_id }}">{{ $client->client_email }}</option>
            @endif
        @endforeach
    </select>
    <div class="container">



        <div class="chat-area">
            <div class="chat-messages" id="chat-messages">

                @php
                    $lastDate = null;
                @endphp

                @foreach ($messages as $message)
                    @if ($lastDate !== $message['formatted_date'])
                        <div class="section chat">
                            <div class="date sticky">
                                <span class="date_text">{{ $message['formatted_date'] }}</span>
                            </div>
                    @endif

                    <div class="message {{ $message['sender'] === session()->get('client_id') ? 'sent' : 'received' }}">
                        <p>{{ $message['message'] }}</p>
                        <span
                            class="timestamp">{{ \Carbon\Carbon::parse($message['created_at'])->format('h:i A') }}</span>
                    </div>

                    @if ($lastDate !== $message['formatted_date'])
            </div>
            @endif

            @php
                $lastDate = $message['formatted_date'];
            @endphp
            @endforeach





            {{-- <div class="section chat">

                        <div class="date sticky">
                            <span class="date_text">6/13/2024</span>
                        </div>

                        <div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div>
                        <div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div><div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div><div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div><div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div><div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div>
                    </div>


                    <div class="section chat">
                        <div class="date sticky">
                            <span class="date_text">6/13/2024</span>
                        </div>

                        <div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div>
                        <div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div> <div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div> <div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div> <div class="message received">
                            <p>Hi there! Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti non tempora,
                                optio pariatur architecto iusto possimus excepturi doloribus debitis laudantium?</p>
                            <span class="timestamp">10:00 AM</span>
                        </div>
                    </div> --}}




        </div>
        <div class="chat-input">
            <input type="text" id="message" placeholder="Type a message...">
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
    </div>
</body>

</html>
<style>
    /* Reset and basic styling */
    body,
    html {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f7f9fc;
        color: #333;
    }

    .container {
        display: flex;
        height: 100vh;
    }

    /* Sidebar styles */
    .sidebar {
        width: 30%;
        background-color: #ffffff;
        border-right: 1px solid #ddd;
        display: flex;
        flex-direction: column;
    }

    .sidebar-header {
        padding: 1rem;
        border-bottom: 1px solid #ddd;
        background-color: #f7f9fc;
    }

    .contacts {
        overflow-y: auto;
        flex-grow: 1;
    }

    .chat {
        display: flex;
        flex-direction: column;
    }

    .chat-messages::-webkit-scrollbar {
        width: 12px;
        /* Width of the entire scrollbar */
    }

    .chat-messages::-webkit-scrollbar-track {
        background: #f1f1f1;
        /* Color of the scrollbar track */
        border-radius: 10px;
        /* Rounded corners for the track */
    }

    .chat-messages::-webkit-scrollbar-thumb {
        background-color: #888;
        /* Color of the scrollbar thumb */
        border-radius: 10px;
        /* Rounded corners for the thumb */
        border: 3px solid #f1f1f1;
        /* Padding around the thumb */
    }

    /* Hover effect for the scrollbar thumb */
    .chat-messages::-webkit-scrollbar-thumb:hover {
        background: #555;
        /* Darker color when hovered */
    }

    .contact {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .contact:hover {
        background-color: #e6f3ff;
    }

    .contact.active {
        background-color: #d0e9ff;
    }

    .contact img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 0.75rem;
    }

    .contact-info h3 {
        margin: 0;
        font-size: 1rem;
    }

    .contact-info p {
        margin: 0;
        color: #888;
    }

    /* Chat area styles */
    .chat-area {
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .chat-header {
        display: flex;
        align-items: center;
        padding: 1rem;
        border-bottom: 1px solid #ddd;
        background-color: #ffffff;
    }

    .chat-header img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 0.75rem;
    }

    .chat-messages {
        flex-grow: 1;
        padding: 1rem;
        overflow-y: auto;
        background-color: #f7f9fc;
        display: flex;
        flex-direction: column;
    }

    .section {
        margin-bottom: 1rem;
        /* Provide spacing between message sections */
        position: relative;
        /* Ensure the sticky date works properly */
    }

    .date {
        text-align: center;
        font-size: 13px;
        margin-top: 1rem;
        /* Added margin to separate dates */
        margin-bottom: 0.5rem;
        /* Adjusted to match spacing */
        position: sticky;
        top: 0;
        background-color: transparent;
        z-index: 100;
        padding: 0.5rem 0;
    }

    .date .date_text {
        padding: 5px 14px;
        background: #e3e3e3;
        border-radius: 6px;
    }

    .message {
        display: flex;
        flex-direction: column;
        margin-bottom: 1rem;
        max-width: 487px;
        position: relative;
        /* Ensure correct positioning of timestamp */
    }

    .message p {
        margin: 0;
        padding: 0.75rem 1rem;
        border-radius: 12px;
        background-color: #e4e6eb;
        line-height: 1.5;
    }

    .message.sent p {
        background-color: #007bff;
        color: #fff;
        align-self: flex-end;
    }

    .message.received {
        align-self: end;
    }

    .message.sent {
        align-self: start;
    }

    .message.received p {
        background-color: #f0f0f0;
    }

    .timestamp {
        font-size: 0.75rem;
        color: #888;
        margin-top: 0.25rem;
        align-self: flex-end;
        margin-right: 10px;
    }

    /* Chat input styles */
    .chat-input {
        display: flex;
        padding: 1rem;
        border-top: 1px solid #ddd;
        background-color: #ffffff;
    }

    .chat-input input {
        flex-grow: 1;
        padding: 0.75rem;
        border: 1px solid #ddd;
        border-radius: 20px;
        outline: none;
        margin-right: 0.5rem;
    }

    .chat-input button {
        padding: 0.75rem 1rem;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .chat-input button:hover {
        background-color: #0056b3;
    }

    /* Scrollbar styles */
    .chat-messages ::-webkit-scrollbar {
        width: 8px;
    }

    .chat-messages ::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    .chat-messages ::-webkit-scrollbar-thumb {
        background: #b0b3b8;
        border-radius: 4px;
    }

    .chat-messages ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    let conn = new WebSocket('ws://localhost:8080');

    conn.onopen = function(e) {

        console.log("websocket connected"); // Assuming data is an array, check its length


    };

    conn.onclose = function(event) {
        console.log('WebSocket is closed now.');
    };

    conn.onmessage = function(e) {
        let data = JSON.parse(e.data);
        if (data.type === "resource_id") {
            console.log(data);
            $.ajax({
                url: "{{ route('resource_id') }}", // This generates the URL for the named route in Laravel
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}", // Include the CSRF token for security
                    // Add any other data you want to send in the request here
                    resource_id: data.resource_id, // Example data
                    conn: "initial"
                },
                success: function(response) {
                    // Handle the success response
                    console.log('Success:', response);
                },
                error: function(xhr, status, error) {
                    // Handle the error response
                    console.log('Error:', error);
                }
            });

        } else {

            console.log(data);
            let client_id = {{ $data->client_id }};
            let messages = document.getElementById('chat-messages');
            let message = `<div class="message `;
            message += (client_id === data.user_id) ? "sent" : "received";
            message += `"><p>${data.message}</p>
        <span class="timestamp">${data.time}</span>
    </div>`;
            messages.insertAdjacentHTML('beforeend', message);
        }
    };


    function sendMessage() {
        let input = document.getElementById('message');
        let toSend = document.querySelector("#toSend").value;
        console.log(toSend);
        if (toSend !== "Select User") {
            let message = {
                user_id: {{ $data->client_id }},
                toSend: toSend,
                message: input.value
            };
            conn.send(JSON.stringify(message));
            input.value = '';
        }

    }
</script>
