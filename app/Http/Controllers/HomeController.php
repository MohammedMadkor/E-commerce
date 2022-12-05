<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function view($id)
    {
        # code...
        $product= Product::where('id' , $id)->first();

            # code...
            $product->image = asset($product->image);




        return view('view',compact('product'));
    }
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     public function list()
    {
        $auth = Auth::user();
        # code...
        $category = Category::all();
        $slider = slider::get();
        foreach ($slider as $s) {
            # code...
            $s->image = asset($s->image);
        }
        $product = Product::get();
        foreach ($product as $p) {
            # code...
            $p->image = asset($p->image);
        }
        $products = Product::OrderBydesc('id')->get();




        return view('welcome',compact(['category','slider','product','products','auth']));
    }
}
