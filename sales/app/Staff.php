<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = ['name','address','phone','user_id'];

    public function products(){
        return $this-> belongsToMany(Product::class,'staffs_products');
    }
}
