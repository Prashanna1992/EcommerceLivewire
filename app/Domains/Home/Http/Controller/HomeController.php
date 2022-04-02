<?php

namespace App\Domains\Home\Http\Controller;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\Product\Models\Product;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.welcome')->with(['products'=>Product::all()]);
    }

    public function productDetail($slug,Request $request){
        // try{
            $product = Product::where('slug',$slug)->where('id',$request->product_id)->firstOrFail();
        // }catch(Exception $e){
        //     return view('frontend.welcome');
        // }
        return view('frontend.product.details',compact('product'));
    }

    public function products()
    {
        return view('frontend.product.index');
    }
}
