<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarftRequest;
use App\Models\Carft;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarftController extends Controller
{
    //
    public function list()
    {
        # code...
        $auth = Auth::user();
        $carft = Carft::orderByDesc('id')-> where('User_id',$auth->id)->get();
        $count = 0;
        foreach ($carft as $c)
        {
            $count = $count + $c->total_price;
            # code...
        }
       
        return view('carft.index',compact(['carft','auth','count']));
    }
    public function create($id)
    {
        # code...
        $product = Product::where('id',$id)->first();
        $product->image = asset($product->image);
        $auth = Auth::user();
        return view('carft.create',compact(['product','auth']));
    }
    public function store(StoreCarftRequest $request)
    {
        # code...
        Carft::create(
            [
                "User_id" => $request->User_id,
                "category" => $request->category,
                "name" => $request->name,
                "prand" => $request->prand,
                "price" => $request->price,
                "quantity" => $request->quantity,
                "total_price" => $request->price * $request->quantity,
            ]
        );
        return redirect('carft');

    }
    public function delete($id)
    {
        # code...
        $carft = Carft::where('id', $id)->delete();
        return redirect('carft');
    }
}
