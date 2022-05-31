<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = Product::all();
        return view('product.view',compact('products'));
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
          $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 12 ; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
        $data = New Product;
        $data->name = $request->name;
        if($request->has('image'))
        {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/image');
            $image->move($destinationPath, $name);
            $data->image = $name;
         }
         $data->price = $request->price;
         $data->status = $request->status;
         $data->upc = $randomString;
        $data->save();
        return redirect()->route('product.index')->with('success','product Created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product ,$id)
    {
        $products = Product::find($id);
        return view('product.edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product ,$id)
    {
        $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 12 ; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
        $data = Product::find($id);
        $data->name = $request->name;
        if($request->has('image'))
        {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/upload/image');
            $image->move($destinationPath, $name);
            $data->image = $name;
         }
         $data->price = $request->price;
         $data->status = $request->status;
         $data->upc = $randomString;
        $data->save();
        return redirect()->route('product.index')->with('success','product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product ,$id)
    {
         $products = Product::find($id);
        $products->delete();
        return redirect()->route('product.index')->with('success','Product deleted successfully');
    }
}
