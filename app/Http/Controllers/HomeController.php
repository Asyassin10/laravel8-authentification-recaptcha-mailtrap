<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Prouduct;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        //show product
        return view('home')->with([
            'products' => Prouduct::latest()->paginate(10),
            'categories' => Category::has('products')->get(),
        ]);
    }
    public function getProductsBycategpry(Category $category)
    {
        $product = $category->products()->paginate(10);
        return view('home')->with([
            'products' => $product,
            'categories' => Category::has('products')->get(),
        ]);
    }
}