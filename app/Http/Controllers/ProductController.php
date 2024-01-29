<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $result = ['name' => 'index', 'payload' => Product::all()];
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     * 
     */

    public function store(Request $request)
    {
        Product::create([
            'product_name' => $request->product_name,
            'product_type' => $request->product_type,
            'price' => $request->price,
        ]);
        $result = ['name' => 'store', 'payload' => $request->all()];
        return $result;
    }

    /**
     * Display the specified resource.
     * 
     */
    public function show($product_id)
    {
        $result = ['name' => 'show', 'payload' => $product_id];
        return $result;
    }

    /**
     * Update the specified resource in storage.
     * 
     * 
     * @param Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        $product = Product::find($product_id);

        // Update multiple fields
        $product->update([
            'product_name' => $request->product_name,
            'product_type' => $request->product_type,
            'price' => $request->price,
        ]);

        if ($product) {
            return json_encode(["message " => "success"]);
        } else {
            return json_encode(["message " => "false"]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product_id)
    {
        $product = Product::find($product_id);

        if ($product) {
            $product->delete();
            return json_encode(["delete" => "success"]);
        } else {
            return json_encode(["delete" => "false"]);
        }
    }
}
