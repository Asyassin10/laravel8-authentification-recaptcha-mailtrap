<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Prouduct;
use Illuminate\Http\Request;

class ProuductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with([
            'products' => Prouduct::latest()->paginate(10),
            'categories' => Category::has('products')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prouduct  $prouduct
     * @return \Illuminate\Http\Response
     */
    public function show(Prouduct $prouduct)
    {
        return view('products.show')->with([
            'product' => $prouduct
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prouduct  $prouduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Prouduct $prouduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prouduct  $prouduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prouduct $prouduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prouduct  $prouduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prouduct $prouduct)
    {
        //
    }
}