<?php

namespace App;
use App\Staff;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;

    protected $fillable = ['product_name','net_price','selling_price','selling_commison','weight'] ;

    public function inventories(){
    	return $this->hasMany('App\Inventory');
    }

    public function staffs(){
        return $this-> belongsToMany(Staff::class,'staffs_products');
    }
}
