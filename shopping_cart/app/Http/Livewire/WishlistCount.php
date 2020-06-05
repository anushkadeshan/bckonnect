<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WishlistCount extends Component
{
    public $wCount = 0;

    public function mount(){
       $this->wCount = auth()->user()->wishlists()->count();
    }
    public function render()
    {
        return view('livewire.wishlist-count');
    }
}
