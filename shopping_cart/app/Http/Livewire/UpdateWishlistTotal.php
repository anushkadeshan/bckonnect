<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class UpdateWishlistTotal extends Component
{
  
    public $total = 0;
    public $products = [];
    public $itemCount = 0; 
    Protected $listeners = ['toUpdateTotal'=>'onUpdateTotal','itemAddedAndRemove'=>'onItemAddedAndRemove'];

    public function mount(){  
        $this->products = auth()->user()->wishlists()->get()->toArray();
        $this->itemCount = \Cart::session(auth()->id())->getContent()->count();
      //  $this->product_id = $product['id'];
      //  $this->total = $product['price']*$product['pivot']['quantity'];
        //dd($this->products);

    }

    public function onUpdateTotal(){
       $this->products = auth()->user()->wishlists()->get()->toArray();
    }

    public function onItemAddedAndRemove(){
       $this->itemCount = \Cart::session(auth()->id())->getContent()->count();
       
    }

    public function render()
    {
        return view('livewire.update-wishlist-total');
    }
}
