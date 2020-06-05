<?php

namespace App;

use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    protected $fillable = ['user_id','product_id','quantity'];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
}
