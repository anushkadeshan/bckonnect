<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $data = Product::all();

        return view('products')->with(['products' => $data]);
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(),[
            'product_name' => 'required',
            'net_price' => 'required',
            'selling_price' => 'required',
            'selling_commison' => 'required',
            'weight' => 'required',
            
        ]);

        if($validator->passes()){
            $data = $request->all();
            $vacancy = Product::create($data);           
        }
        else{
            return response()->json(['error' => $validator->errors()->all()]);
        }
    }
}
