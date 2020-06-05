<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ShowTopProducts extends Component
{
    public $products = [];
    public function mount(Product $products){
        $this->products = $products->take(12)->get();
    }

    public function render()
    {
        return view('livewire.show-top-products');
    }
}
