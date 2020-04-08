<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public $timestamps = true;

    protected $fillable = ['product_id','available_stock','batch_no'] ;

    public function family(){
    	return $this->belongsTo('App\Product');
    }
}
