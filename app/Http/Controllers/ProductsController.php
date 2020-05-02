<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
=======
use App\Product;
use Illuminate\Http\Request;
>>>>>>> 37ebb92bd58ac1f28d532e1b93dc6cdd9e2f71ea

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
<<<<<<< HEAD
        $products = DB::table('categories')
            ->join('products', 'products.category_id', '=', 'categories.id')
            ->get();
        return view('products/index',[
            'products' => $products
        ]);
=======
>>>>>>> 37ebb92bd58ac1f28d532e1b93dc6cdd9e2f71ea
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
<<<<<<< HEAD
        $categories = Category::all();
        return view('products/create',[
           'categories' => $categories
        ]);
=======
>>>>>>> 37ebb92bd58ac1f28d532e1b93dc6cdd9e2f71ea
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
<<<<<<< HEAD
        $request->validate([
            'category_id' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required'
        ]);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->unit_price = $request->unit_price;
        $product->save();

        return redirect('products');

=======
>>>>>>> 37ebb92bd58ac1f28d532e1b93dc6cdd9e2f71ea
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
<<<<<<< HEAD
        $categories = Category::all();
        $product = Product::find($product->id);
        return view('products/edit',[
            'product' => $product,
            'categories' => $categories
        ]);
=======
>>>>>>> 37ebb92bd58ac1f28d532e1b93dc6cdd9e2f71ea
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
<<<<<<< HEAD
        $request->validate([
            'category_id' => 'required',
            'product_name' => 'required',
            'unit_price' => 'required'
        ]);

        $product->category_id = $request->category_id;
        $product->product_name = $request->product_name;
        $product->unit_price = $request->unit_price;
        $product->save();

        return redirect('products');
=======
>>>>>>> 37ebb92bd58ac1f28d532e1b93dc6cdd9e2f71ea
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
<<<<<<< HEAD
        $product = Product::find($product->id);
        $product->delete();

        return redirect('products');
=======
>>>>>>> 37ebb92bd58ac1f28d532e1b93dc6cdd9e2f71ea
    }
}
