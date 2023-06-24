@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                    <div class="card-header">
                        <h2>Order</h2>
                    </div>

                    <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>

                <div class="card-body">
                    <div class="table-resposive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->product_name}}</td>
                                    <td>{{$order->price}}</td>
                                    <td>
                                    <a href="{{url('delete-order/' .$order->id) }}" class="btn btn-danger">Delete</th>
                                    </td>                  
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{url('/')}}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
