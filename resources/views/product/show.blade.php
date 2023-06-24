@extends('layouts.app')
@section('content')

<div class="card" style="margin:20px">
    <div class="card-header">View Product</div>
</div>

<div class="card-body">
    <div class="card-body">
        <h3 class="card-title">Product Name : {{$products->product_name}}</h3>
        <p class="card-text">Product Description : {{$products->product_description}}</p>
        <p class="card-text">Price : {{$products->price}}</p>
    </div>
    <a href="{{url('/')}}" class="btn btn-danger">Back</a>
    <hr/>
    
</div>

@stop