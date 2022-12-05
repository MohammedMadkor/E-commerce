<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSliderRequest;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list()
    {
        # code...
        $auth = Auth::user();
        $slider = slider::orderByDesc('id')->get();
        foreach ($slider as $s) {
            # code...
            $s->image = asset($s->image);
        }
        return view('slider.index',compact(['slider','auth']));
    }
    public function create()
    {
        # code...
        return  view('slider.create');
    }
    public function store(StoreSliderRequest $request)
    {
        # code...
        $image = $request->image;
        if($image){
            $filename = $image->getClientOriginalName();
            $image->move(base_path('public/uploads'), $filename);
            $path = 'uploads/' . $filename;
            slider::create([
                "image" => $path,
            ]);
            return redirect('slider');
        }
        return redirect()->back();

    }
    public function delete($id)
    {
        # code...
        $slider = slider::where('id' , $id)->first();
        $slider->delete();
        return redirect('slider');
    }
    public function update($id)
    {
        # code...
        $slider = slider::where('id',$id)->first();
        $slider->image = asset($slider->image);
        return view('slider.update',compact('slider'));
    }
    public function edit(StoreSliderRequest $request ,$id )
    {
        # code...
        $slider = slider::where('id' , $id)->first();
        $image = $request->image;
        if($image){
            $filename = $image->getClientOriginalName();
            $image->move(base_path('public/uploads'), $filename);
            $path = 'uploads/' . $filename;
            $slider->update([
                "image" => $path,
            ]);
            return redirect('slider');
        }

    }
}
