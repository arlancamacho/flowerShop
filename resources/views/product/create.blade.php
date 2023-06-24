@extends('layouts.app')
@section('content')

<div class="card" style="margin:20px">
    <div class="card-header">Create Product</div>
</div>

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
{{Session::get('success')}}
</div>
@endif

<div class="card-body">
<form method="post" action="{{url('save-product')}}">
    @csrf
        <label for="">Product Name</label>
        <input type="text" name="productName" id="productName" class="form-control"></br>
        @error('productName')
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
        @enderror
        <label for="">Product Description</label><br/>
       <textarea class="form-control" name="productDescription" id="" cols="50" rows="5"></textarea>
       @error('productDescription')
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
        @enderror
        <label for="">Quantity</label>
        <input type="number" name="quantity" id="quantity" class="form-control"></br>
        @error('quantity')
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
        @enderror
        <label for="">Price</label>
        <input type="number" name="price" id="price" class="form-control"></br>
        @error('price')
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
        @enderror
        <label for="" class="form-control">Status</label>
        @error('status')
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
        @enderror
        <select class="form-control" name="status" id="status">
            <option value="enable">Enable</option>
            <option value="disable">Disable</option>
        </select><br/>

        <input type="submit" value="Save" class="btn btn-primary">
        <a href="{{url('/')}}" class="btn btn-danger">Back</a>
    </form>
</div>
@stop