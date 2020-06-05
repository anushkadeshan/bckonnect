<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'fullname' => 'required',
            'state' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'zip_code' => 'required',
            'email' => 'required|email',
            'street_address' => 'required',
            'payment_method'=> 'required'

        ]);

        if(!$request->input('shipping_fullname')==""){
            $request->validate([
                'shipping_fullname' => 'required',
                'shipping_state' => 'required',
                'shipping_city' => 'required',
                'shipping_phone' => 'required',
                'shipping_zip_code' => 'required',
                'shipping_email' => 'required|email',
                'shipping_street_address' => 'required',
                'payment_method'=> 'required'
            ]);  
        }
        

        $order = new Order();
        $order->order_number = uniqid('OrderNumber-');

        $order->country = $request->input('country');
        $order->fullname = $request->input('fullname');
        $order->company_name = $request->input('company_name');
        $order->street_address = $request->input('street_address');
        $order->apartment = $request->input('apartment');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->zip_code = $request->input('zip_code');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->notes = $request->input('notes');
        $order->payment_method = $request->input('payment_method');
        
        if($request->input('shipping_fullname')=="") {
            $order->shipping_country = $request->input('country');
            $order->shipping_fullname = $request->input('fullname');
            $order->shipping_company_name = $request->input('company_name');
            $order->shipping_street_address = $request->input('street_address');
            $order->shipping_apartment = $request->input('apartment');
            $order->shipping_city = $request->input('city');
            $order->shipping_state = $request->input('state');
            $order->shipping_zip_code = $request->input('zip_code');
            $order->shipping_email = $request->input('email');
            $order->shipping_phone = $request->input('phone');
        }
        else{
            $order->shipping_country = $request->input('shipping_country');
            $order->shipping_fullname = $request->input('shipping_fullname');
            $order->shipping_company_name = $request->input('shipping_company_name');
            $order->shipping_street_address = $request->input('shipping_street_address');
            $order->shipping_apartment = $request->input('shipping_apartment');
            $order->shipping_city = $request->input('shipping_city');
            $order->shipping_state = $request->input('shipping_state');
            $order->shipping_zip_code = $request->input('shipping_zip_code');
            $order->shipping_email = $request->input('shipping_email');
            $order->shipping_phone = $request->input('shipping_phone');
        }

        $order->grand_total = \Cart::session(auth()->id())->getTotal();
        $order->item_count = \Cart::session(auth()->id())->getContent()->count();

        $order->user_id = auth()->id();

        $order->save();

        //save cart items
        $cartItems = \Cart::session(auth()->id())->getContent();
        foreach($cartItems as $item) {
            $order->items()->attach($item->id, ['price'=> $item->price, 'quantity'=> $item->quantity]);
        }

        //payment
        if(request('payment_method') == 'paypal') {
                //redirect to paypal
            return redirect()->route('paypal.checkout', $order->id);
        }

        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
