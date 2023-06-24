@extends('layouts.app')
@section('content')

<div class="card" style="margin:20px">
    <div class="card-header">View Product</div>
</div>
@if(Session::has('success'))
              <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
              </div>
              @endif
<div class="card-body">
    <form method="post" action="{{url('update-product') }}">
    @csrf
    <input type="hidden" name="id" value="{{$products->id}}">

        <label for="">Product Name</label>
        <input type="text" name="productName" id="productName" value="{{$products->product_name}}" class="form-control"></br>

        <label for="">Product Description</label><br/>
       <textarea class="form-control" name="productDescription" value="{{$products->product_description}}" id="" cols="50" rows="5"></textarea>

        <label for="">Quantity</label>
        <input type="number" name="quantity" value="{{$products->quantity}}" id="quantity" class="form-control"></br>

        <label for="">Price</label>
        <input type="number" name="price" value="{{$products->price}}" id="price" class="form-control"></br>

        <label for="" class="form-control">Status</label>
        <select class="form-control" value="{{$products->status}}" name="status" id="status">
        <option value="enable">Enable</option>
        <option value="disable">Disable</option>
        </select><br/>

        <input type="submit" value="Update" class="btn btn-primary">
        <a href="{{url('/')}}" class="btn btn-danger">Back</a>
  
    </form>
</div>
@stop