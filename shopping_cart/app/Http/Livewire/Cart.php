<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cartItems = [];
    

    protected $listeners = ['cartUpdated' => 'onCartUpdated'];

    public function mount(){
        $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();
    }

    public function onCartUpdated(){
       $this->cartItems = \Cart::session(auth()->id())->getContent()->toArray();

       $this->emit('updateSubTotal');

    }



    public function render()
    {
        return view('livewire.cart');
    }
}
