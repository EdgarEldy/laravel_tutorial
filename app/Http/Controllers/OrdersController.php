<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = DB::table('customers')
            ->join('orders', 'orders.customer_id', '=', 'customers.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->get();
        return view('orders/index', [
            'orders' => $orders
        ]);
    }

    /**
     * @param Request $request
     */
    public function getProducts(Request $request)
    {

        if ($request->has('cat_id')) {
            $cat_id = $request->get('cat_id');
            $products = DB::table('categories')
                ->join('products', 'products.category_id', '=', 'categories.id')
                ->where('categories.id', '=', $cat_id)
                ->get();


        }

        return view('orders/getProducts', [
            'products' => $products
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
        $categories = Category::all();
        $customers = Customer::all();
        $products = DB::table('categories')
            ->join('products', 'products.category_id', '=', 'categories.id')
            ->get();
        return view('orders/create', [
            'categories' => $categories,
            'customers' => $customers,
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Form validation
        $request->validate([
            'customer_id' => 'required',
            'product_id' => 'required',
            'unit_price' => 'required',
            'qty' => 'required',
            'total' => 'required',
        ]);

        $order = new Order();
        $order->customer_id = $request->customer_id;
        $order->product_id = $request->product_id;
        $order->qty = $request->qty;
        $order->total = $request->total;
        $order->save();

        return redirect('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
