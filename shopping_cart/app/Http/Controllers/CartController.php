<?php

namespace App\Http\Controllers;

use Auth;
use App\Coupon;
use App\Product;
use Illuminate\Http\Request;
use Cart;
use Alert;
class CartController extends Controller
{
    public function add(Product $product){
        // add the product to cart
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');

    }
    public function index(){
        //$cartItems = Cart::session(auth()->id())->getContent();
        return view('cart.index',compact('cartItems'));
    }

    public function destroy($itemId){
        \Cart::session(auth()->id())->remove($itemId);
        return back();
    }

    public function update($itemId){
        // update the item on cart
        \Cart::session(auth()->id())->update($itemId,[
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity'),
            ),
        ]);

        return back();
    }

    public function checkout(){
        $cartItems = \Cart::session(auth()->id())->getContent()->count();
        if($cartItems==0){
             Alert::toast('Please add Items to Checkout', 'error')->position('top-end');
            return redirect()->route('cart.index')->withError("Please add Items to Checkout");
        }
        //get countries name
        $url = 'https://restcountries.eu/rest/v2/all';
        $options = array('http' => array(
            'method'  => 'GET'
        ));
        $context  = stream_context_create($options);
        $body = file_get_contents($url, false, $context);
        $countries =  json_decode($body);
        //dd($countries);

        $products = \Cart::session(auth()->id())->getContent()->toArray();
        return view('cart.checkout',compact('countries','products'));
    }

    public function applyCoupon(){
        $coupon_code = request('coupon_code');

        $coupon_data = Coupon::where('code',$coupon_code)->first();

        if(!$coupon_data){
            return back()->withError('Coupon Code is invalid');
        }

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $coupon_data->name,
            'type' => $coupon_data->type,
            'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => $coupon_data->value,
        ));

        \Cart::session(auth()->id())->condition($condition);

        return back()->withMessage('Coupon Code is applied');


    }
}
