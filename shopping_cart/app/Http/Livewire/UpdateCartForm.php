<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UpdateCartForm extends Component
{
    public $cart = [];

    public $quantity = 0;

    public function mount($cart){
        $this->cart = $cart;
        $this->quantity = $cart['quantity'];
    }

    public function updateCart(){
        \Cart::session(auth()->id())->update($this->cart['id'],[
            'quantity' => array(
                'relative' => false,
                'value' => $this->quantity,
            ),
        ]);
        
        //send updaetd data to CartItems varible / emit event
        $this->emit('cartUpdated');

    }
    public function render()
    {
        return view('livewire.update-cart-form');
    }
}
