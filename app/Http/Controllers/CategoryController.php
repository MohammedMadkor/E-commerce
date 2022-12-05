<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list()
    {
        # code...
        $auth = Auth::user();
        $category = Category::orderByDesc('id')->get();
        return view('category.index', compact(['category', 'auth']));
    }
    public function create()
    {
        # code...
        return view('category.create');
    }
    public function store(CategoryRequest $request)
    {
        # code...
        Category::create([
            "name" => $request->name,
        ]);
        return redirect('category');
    }
    public function delete($id)
    {
        # code...
        $category = Category::where('id', $id)->delete();
        return redirect('category');
    }
    public function update($id)
    {
        // $products =  Product::where("Category_id", $id)->get();
        // dd($products);
        # code...
        $category = Category::where('id', $id)->first();
        return view('category.update', compact('category'));
    }
    public function edit(EditCategoryRequest $request, $id)
    {
        # code...
        $category = Category::where('id', $id)->update(
            [
                "name" => $request->name,
            ]
        );
        return redirect('category');
    }
}
