<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddWishlistToCart extends Component
{
    public $product = [];
    public $product_id = 0;

    public function mount($product){
        $this->product = $product;
        $this->product_id = $product['id'];    
    }

    public function addToCart(){
    $data =   \Cart::session(auth()->id())->add(array(
            'id' => $this->product['id'],
            'name' => $this->product['name'],
            'price' => $this->product['price'],
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $this->product
        ));
    session()->flash('message', 'Item successfully added to the Cart.');   
    
    $this->emit('itemAdded');

    }

    public function render()
    {
        return view('livewire.add-wishlist-to-cart');
    }
}
