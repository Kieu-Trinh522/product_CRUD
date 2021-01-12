<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Products::all();
        return view('product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= new Products();
        $product->fill($request->all());
        if (!$request->hasFile('inputFile')) {
            $product->image = 'uploads/default.png';
        } else {
            $imageName = time().'.'.$request->inputFile->extension();
            $request->inputFile->move(public_path('uploads'), $imageName);
            $product->image = 'uploads/'.$imageName;
        }
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Products::findOrFail($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->fill($request->all());
        if (!$request->hasFile('inputFile')) {

        } else {
            $imageName = time().'.'.$request->inputFile->extension();
            $request->inputFile->move(public_path('uploads'), $imageName);
            $product->image = 'uploads/'.$imageName;
        }
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }

    public function search()
    {
        return view('product.list');
    }

    public function getCitySearch(Request $request)
    {
        $products = Products::where('product_name','LIKE','%'.$request->keyword.'%')->get();
        return view('product.list',compact('products'));

    }
}
