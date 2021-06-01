<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function index(){
        $products=Product::paginate(8);

        return view('welcome',compact('products'));
    }

    public function show($id){
       $products=Product::find($id); 
     /*   $products=Product::select('products.imagen')
                ->join('coments','products.id','=','coments.id_product')
                ->where('products.id','=',$id)
                ->get(); */

      return view('productShow',compact('products'));  
      /*  return $products;  */
    }

    public function search(Request $request){
        $products=Product::where('nombre','LIKE','%'.$request->search.'%')->get();
        
        return view('productSearch',compact('products'));
    }
}
