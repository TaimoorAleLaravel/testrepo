<?php


namespace App\Http\Controllers;

use App\Models\ClientProfile;
use App\Models\Payment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaypalController extends Controller
{
    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        try {
            if (!is_null(session()->get('client_id'))) {

                $client_id = session()->get('client_id');
               $clientprofile=  ClientProfile::where('client_id', $client_id)->first();

            $response = $this->gateway->purchase(array(
                'amount' => $clientprofile->total_payment,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('paypal-success'),
                'cancelUrl' => url('paypal-cancel')
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            }
            else{
                return $response->getMessage();
               }
               }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));
            $client_id = session()->get('client_id');
            $clientprofile=  ClientProfile::where('client_id', $client_id)->first();

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $payment = new Payment();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];
                $payment->save();

                $clientprofile->payment_method = 'Paypal';
                $clientprofile->payment_status = 'paid';
                $clientprofile->save();

                return view('client.login');

            }
            else{
                return $response->getMessage();
            }
        }
        else{
            return 'Payment declined!!';
        }
    }

    public function cancel()
    {
        return 'User declined the payment!';   
    }

}