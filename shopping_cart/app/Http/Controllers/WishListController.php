<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use App\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    //

    public function index(Product $product){
        $products = auth()->user()->wishlists()
                    ->get()->toArray();
        //dd($products,auth()->user()->id);
        return view('wishlist.index',compact('products'));
    }

    public function delete($id){
        $product = auth()->user()->wishlists->find($id);
        $product->delete();

        return redirect()->back()->withMessage('Successfully Deleted Item from Wishlist');
    }
    
}
