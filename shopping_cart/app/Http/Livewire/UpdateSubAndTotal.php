<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UpdateSubAndTotal extends Component
{

    public $subtotal = 0;
    public $total = 0;

    protected $listeners = ['updateTotal' => 'onUpdateTotal'];
    public function mount(){
        $this->subtotal = \Cart::session(auth()->id())->getSubTotal();
        $this->total = \Cart::session(auth()->id())->getTotal();
    }

    public function onUpdateTotal(){
        $this->subtotal = \Cart::session(auth()->id())->getSubTotal();
        $this->total = \Cart::session(auth()->id())->getTotal();
    }

    public function render()
    {
        return view('livewire.update-sub-and-total');
    }
}
