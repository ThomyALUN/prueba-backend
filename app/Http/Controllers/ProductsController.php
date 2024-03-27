<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Show all the rows of the table
        // Returns the product management view
        $products = Product::all();
        return view('product_management')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Returns the view that allows to create products
        return view('create_products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Takes and stores the data on the database
        // Redirects the user to the view that [...]
        $product=new Product();
        $product->name=$request->prod_name;
        $product->description=$request->prod_description;
        $product->price=$request->prod_price;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Looks for an specific product by its id and it shows 
        // all the data in the view that allows editing
        $product=Product::find($id);
        return view('product_edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Updates the database row of a given item identified by its id
        $product=Product::find($id);
        $product->name=$request->prod_name;
        $product->description=$request->prod_description;
        $product->price=$request->prod_price;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Deletes a row from the table by its id
        $product=Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
