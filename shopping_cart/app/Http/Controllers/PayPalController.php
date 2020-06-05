<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use App\Order;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPaid;
use Alert;
class PayPalController extends Controller
{
    private function checkoutData($orderId)
    {
        $cart = \Cart::session(auth()->id());

        $cartItems = array_map(function ($item) use($cart) {
            return [
                'name' => $item['name'],
                'price' => $item['price'],
                'qty' => $item['quantity']

            ];
        }, $cart->getContent()->toarray());



        $checkoutData = [
            'items' => $cartItems,
            'return_url' => route('paypal.success',$orderId),
            'cancel_url' => route('paypal.cancel'),
            'invoice_id' => uniqid(),
            'invoice_description' => " Order description ",
            'total' => $cart->getSubTotal(),
            'shipping_discount' => $cart->getSubTotal() - $cart->getTotal()

        ];

        return $checkoutData;
    }

    public function getExpressCheckout($orderId)
    {
        $checkoutData = $this->checkoutData($orderId);

        $provider = new ExpressCheckout();

        $response = $provider->setExpressCheckout($checkoutData);

        return redirect($response['paypal_link']);
    }

    

    public function cancelPage(){
         Alert::error('Something went wrong!', 'Payment UnSuccessful!');
          return redirect()->route('home')->withError('Payment UnSuccessful! Something went wrong!');

    }

    public function getExpressCheckoutSuccess(Request $request, $orderId)
    {

        $token = $request->get('token');
        $payerId = $request->get('PayerID');
        $provider = new ExpressCheckout();
        $checkoutData = $this->checkoutData($orderId);

        $response = $provider->getExpressCheckoutDetails($token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            // Perform transaction on PayPal
            $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];
            if(in_array($status,['Completed','Processed'])){
                $order = Order::find($orderId);
                $order->is_paid = 1;
                $order->save();

                //send a mail
                Mail::to($order->user->email)->send(new OrderPaid($order));
               
                //empty cart
                \Cart::session(auth()->id())->clear();
                //send email to customer

                Alert::success('Congradulations', 'Order has been placed');
                return redirect()->route('home')->withMessage('Order has been placed');
            }
            

        }

        return redirect()->route('home')->withError('Payment UnSuccessful! Something went wrong!');


    }
}
