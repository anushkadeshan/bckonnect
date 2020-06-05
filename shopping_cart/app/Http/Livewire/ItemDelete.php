<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ItemDelete extends Component
{
    public $cart = [];

    public function mount($cart){
        $this->cart = $cart;
    }

    public function itemDelete(){
        \Cart::session(auth()->id())->remove($this->cart['id']);
        
        //send updaetd data to CartItems varible / emit event
        $this->emit('cartUpdated');

    }
    public function render()
    {
        return view('livewire.item-delete');
    }
}