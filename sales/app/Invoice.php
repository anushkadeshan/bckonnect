<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $timestamps = true;
    protected $fillable = ['staff_id','product_id','customer_id','sales_commission'];

    

}
