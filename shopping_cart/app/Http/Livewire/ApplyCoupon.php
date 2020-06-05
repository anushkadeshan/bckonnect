<?php

namespace App\Http\Livewire;

use App\Coupon;
use Livewire\Component;

class ApplyCoupon extends Component
{

    public $coupon_code = null;
    public $total = 0;
    public $subTotal = 0;
    public $discount = 0;

    protected $listeners = ['updateSubTotal' => 'onUpdateSubTotal'];

    public function mount(){

        $this->coupon_code = request()->input('coupon_code');
        $this->total = \Cart::session(auth()->id())->getTotal();
        $this->subTotal = \Cart::session(auth()->id())->getSubTotal();
        $this->discount = $this->subTotal - $this->total;
    }

    public function ApplyCoupon(){
        $coupon_code = $this->coupon_code;
        $coupon_data = Coupon::where('code',$coupon_code)->first();
        //dd($coupon_data);
        if(!$coupon_data){
            session()->flash('errorCoupon', 'Sorry! Coupon code is invalid.');
        }
        else{
            $condition = new \Darryldecode\Cart\CartCondition(array(
                'name' => $coupon_data->name,
                'type' => $coupon_data->type,
                'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
                'value' => $coupon_data->value,
            ));

            \Cart::session(auth()->id())->condition($condition);
            session()->flash('successCoupon', 'Coupon Code is applied successfully.');

            $this->total = \Cart::session(auth()->id())->getTotal();
            $this->discount = $this->subTotal - $this->total;
        }
    }

    public function onUpdateSubTotal(){
        $this->subTotal = \Cart::session(auth()->id())->getSubTotal();
        $this->total = \Cart::session(auth()->id())->getTotal();
        $this->discount = $this->subTotal - $this->total;
    }

    public function render()
    {
        return view('livewire.apply-coupon');
    }
}
