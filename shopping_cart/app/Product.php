<?php

namespace App;
use App\Shop;
use App\User;
use App\product;

use App\WishList;
use App\ProductReview;
use TCG\Voyager\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }
    
    public function catogery()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function wishlists()
    {
        return $this->belongsToMany(User::class, 'wish_lists')->withpivot('quantity');
    }

    
    public function reviews()
    {
        return $this->hasMany(ProductReview::class);
    }

    public function getStarRating(){
        $starCountSum = $this->reviews()->sum('rating');
        $average = $starCountSum/$this->reviews()->count();
        return $average;
    }
    
    
}
