<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::paginate(8);

        return view('welcome',compact('products'));
    }

    public function show($id){
        $products=Product::find($id);

        return view('productShow',compact('products'));
    }

    public function search(Request $request){
        $products=Product::where('nombre','LIKE','%'.$request->search.'%')->get();
        
        return view('productSearch',compact('products'));
    }
}
