<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class UpdateWishlistQuantity extends Component
{
    public $product = [];

    public $quantity = 0;

    public function mount($product){
        $this->product = $product;
        $this->quantity = $product['pivot']['quantity'];
    }

    public function updateWishlist(){
        $data = ['quantity'=> $this->quantity];
        $wishlist = Product::find($this->product['id']);
       // dd($data, $this->product['id']);
        $updated_quantity = auth()->user()->wishlists()->updateExistingPivot($this->product['id'],$data);

        $updated_data = auth()->user()->wishlists()->find($this->product['id']);
        $this->quantity = $updated_data->pivot->quantity;
      //dd($this->quantity);
        $this->emit('toUpdateTotal');
    }

    public function render()
    {
        return view('livewire.update-wishlist-quantity');
    }
}
