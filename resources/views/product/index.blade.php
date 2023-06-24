@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                    <div class="card-header">
                        <h2>Product</h2>
                    </div>

                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                    @csrf
                <div class="card-body">
                    <a href="{{url('add-product')}}" class="btn btn-success btn-sm" title="add_product">
                        Add Product
                    </a>
                    <a href="{{url('/view-order-product')}}" style="margin-left:12px">View Order</a>
                    <br/>
                    <br/>
                    <div class="table-resposive">
                  
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                                @foreach($products as $product)
                                
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product ->product_name}}</td>
                                    <td>{{$product->product_description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>
                            
                                    <a href="{{url('show-product/'.$product->id)}}" title="viewProduct" class="btn btn-primary" style="margin:5px">View</a>               
                                    <a href="{{url('edit-product/'.$product->id)}}" title="editProduct" class="btn btn-info" style="margin:5px">Edit</a>
                                    @if($product->status === 'enable')
                                    <a href="{{url('order-product/' .$product->id)}}" title="orderProduct" class="btn btn-success" style="margin:5px">Order</a>
                                   @else
                                   <a href="" title="orderProduct" class="btn btn-secondary" style="margin:5px">Disabled</a>
                                    @endif
                                    <a href="{{url('delete-product/' .$product->id) }}" class="btn btn-danger">Delete</th>
                                    </td>                  
                                </tr>
                               
                                @endforeach
                           
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
