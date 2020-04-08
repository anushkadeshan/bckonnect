<?php

namespace App\Http\Controllers;
use DB;
use App\Product;
use App\Staff;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
       
       $products = Product::all();
       $staffs = DB::table('staffs')->get();

       $data =  DB::table('staffs_products')
                ->join('staffs','staffs.id','=','staffs_products.staff_id')
                ->join('products','products.id','=','staffs_products.product_id')
                ->get();
        
        return view('sales')->with(['staffs'=>$data,'team'=>$staffs,'products'=>$products]);
    }

    
}
