<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId= request('category_id');
        $categoryName = null;

        if($categoryId){
            $category = Category::find($categoryId);
            $products = $category->allProducts();

            $categoryName = $category->name;
        }else{
            $products = Product::take(12)->get();
        }

        //dd($products);
        return view('product.index',compact('products','categoryName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name','LIKE', "%$query%")->paginate(8);
        //dd($products);
        return view('product.catalog',compact('products'));
    }

    public function show(Product $product)
    {
      //  dd($product->getStarRating() ?? null);
        $product = $product->with('reviews')->first();
        //dd($product); 
        return view('product.view',compact('product'));
    }


    

   
}
