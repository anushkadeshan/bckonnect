<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use Alert;

class AddToCart extends Component
{
    public $product = [];

    public function mount($product){
        $this->product = $product;
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
        return view('livewire.add-to-cart');
    }
}
