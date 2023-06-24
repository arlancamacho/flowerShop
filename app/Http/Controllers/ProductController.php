<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = product::all();
       
        return view('product.index')->with('products', $products);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'productName' => 'required',
            'productDescription' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);

        $productName = $request->productName;
        $productDescription = $request->productDescription;
        $quantity = $request->quantity;
        $price = $request->price;
        $status = $request->status;

        $product = new product();
        $product -> product_name = $productName;
        $product -> product_description = $productDescription;
        $product -> quantity = $quantity;
        $product -> price = $price;
        $product -> status = $status;
        $product->save();
        
    
        return redirect() ->back() ->with('success','Product Added Successfully');
    }

    public function show(string $id)
    {
        $products = product::find($id);
        return view('product.show')->with('products', $products);
    }

    public function edit(string $id)
    {
        $products = product::find($id);
        return view('product.edit')->with('products', $products);
    }

    public function update(Request $request)
    {
        $request -> validate([
            'productName' => 'required',
            'productDescription' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);

        $id            = $request->id;
        $productName = $request->productName;
        $productDescription = $request->productDescription;
        $quantity = $request->quantity;
        $price = $request->price;
        $status = $request->status;

        product::where('id', '=', $id)->update([
            
            'product_name' => $productName,
            'product_description' => $productDescription,
            'quantity' => $quantity,
            'price' => $price,
            'status' => $status,
        ]);

        return redirect() ->back() ->with('success','People Updated Successfully');
    }

    public function destroy($id)
    {
        product::where('id', '=', $id)->delete();
        return redirect() ->back() ->with('success','People Deleted Successfully');
    }

}

