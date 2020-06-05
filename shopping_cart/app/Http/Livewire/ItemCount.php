<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Alert;
class ItemCount extends Component
{
    public $itemCount = 0; 

    protected $listeners = ['itemAdded' => 'onItemAdded']; 

    public function mount(){
        $this->itemCount = \Cart::session(auth()->id())->getContent()->count();
    }

    public function onItemAdded(){
        $this->itemCount = \Cart::session(auth()->id())->getContent()->count();
    }
    
    public function render()
    {
        return view('livewire.item-count');
    }
}
