<?php

namespace App\Http\Livewire;

use App\Product;
use App\WishList;
use Livewire\Component;

class AddWishList extends Component
{
    public $product = [];

    public function mount(Product $product){
        $this->product = $product;
        
    }

    public function addToWishlist(WishList $wishlist){
        dd($this->product['id']);
        $query  = auth()->user()->wishlists()->find($this->product['id']);
        if(!$query){
            $data = [
                'user_id'=> auth()->user()->id,
                'product_id'=> $this->product['id'],
                'quantity' => 1        
            ];

            WishList::create($data);
            session()->flash('message', 'Item successfully added to the Wishlist.');
        }
        

    }

    public function render()
    {
        return view('livewire.add-wish-list');
    }
}
