<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProductRequest;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list()
    {
        # code...
        $auth = Auth::user();
        $product = Product::orderByDesc('id')->get();
        foreach($product as $produ){
            $produ->image = asset($produ->image);
        }

        return view('product.index',compact(['product','auth']));
    }
    public function create()
    {
        # code...
        $category = Category::all();
        return view('product.create',compact('category'));
    }
    public function store(StoreProductRequest $request)
    {
$image = $request->image;
if ($image) {
    $filename = $image->getClientOriginalName();
    $image->move(base_path('public/uploads'), $filename);
    $path = 'uploads/' . $filename;

        # code...
        Product::create([
            "Category_id" => $request->Category_id,
            "name" => $request->name ,
            "price" => $request->price ,
            "image" => $path,
            "prand" => $request->prand,
        ]);
        return redirect('product');
    }
    return redirect()->back();

    }
    public function delete($id)
    {
        # code...
        $product = Product::where('id' , $id)->first();
        $product->delete();
        return redirect('product');

    }
    public function update($id)
    {
        # code...

        $category = Category::all();
        $product = Product::where('id' , $id)->first();
        $product->image = asset($product->image);
        return view('product.update',compact(['category','product']));

    }
    public function edit(EditProductRequest $request ,$id)
    {


        $product = Product::where('id' , $id)->first();
        $commingImg = $request->image;
        if(!is_null($commingImg)){

                $filename = $commingImg->getClientOriginalName();
                $commingImg->move(base_path('public/uploads'), $filename);
                $path = 'uploads/' . $filename;
                $product ->update([
                    "Category_id" => $request->Category_id,
                    "name" => $request->name ,
                    "price" => $request->price ,
                    "image" => $path,
                    "prand" => $request->prand,
                ]);
                return redirect('product');

        }
            $product ->update([
                "Category_id" => $request->Category_id,
                "name" => $request->name ,
                "price" => $request->price ,
                "prand" => $request->prand,
            ]);
            return redirect('product');

        return redirect()->back();
    }
}
