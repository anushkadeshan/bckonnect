<?php

namespace App\Http\Controllers;
use App\Product;
use App\Staff;
use DB;
use Illuminate\Http\Request;
use Auth;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $products = Product::all();
        return view('invoices')->with(['products'=>$products]);

    }
    
    public function create(Request $request){

        $number = count($request->product_id);
        $Auth_id = Auth::id();
        $staff = DB::table('staffs')->where('user_id',$Auth_id)->first();
        $staff_id = $staff->id;
            if($number>0){
                for($i=0; $i<$number; $i++){
                    $commision_rate = Product::where('id',$request->product_id[$i])->first();
                    $sales_commision = ($commision_rate->selling_price*$request->items[$i]*$commision_rate->selling_commison);
                    $data = DB::table('staffs_products')->insert(['staff_id'=>$staff_id,'product_id'=>$request->product_id[$i],'items'=>$request->items[$i],'sales_commission'=>$sales_commision]);
                }

            }

    }

    
}
