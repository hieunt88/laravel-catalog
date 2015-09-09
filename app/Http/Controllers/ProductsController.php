<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display details of a product
     *
     * @return Response
     */
    public function index()
    {
        //this route is NOT used. redirect to home
        return redirect('/');
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        //
        $categories = \App\Category::lists('title', 'id');
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created Product
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProductRequest $request)
    {
        //
        // dd(\App\Category::find($request['category']));
        $category = \App\Category::find($request['category']);
        $product = new Product($request->all());

        $category->products()->save($product);

        \Session::flash('flash_message', 'Your article has been created');

        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Product $product)
    {
        //
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Product $product)
    {
        //
        $categories = \App\Category::lists('title', 'id');
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        //
        $product->update($request->all());

        return redirect('products/'.$product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
