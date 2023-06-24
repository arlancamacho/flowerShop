<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\order_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $orders = DB::table('order_tables')
        ->join('users', 'users.id', '=', 'order_tables.user_id')
        ->join('products', 'products.id', '=', 'order_tables.product_id')
        ->select('order_tables.*', 'users.name as user_name', 'products.product_name as product_name')
        ->get();

        return view('order.index')->with('orders', $orders);
    }

    public function create()
    {
        //
    }


    public function store($id, Request $request)
    {
        $products = product::find($id);
        $userId = Auth::id();

        $orderProd = new order_table();
        $orderProd -> product_id = $products->id;
        $orderProd -> user_id = $userId;
        $orderProd -> price = $products->price;

        $orderProd->save();
        return redirect() ->back() ->with('success','Order Added Successfully');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        order_table::where('id', '=', $id)->delete();
        return redirect() ->back() ->with('success','Order Deleted Successfully');
    }
}
