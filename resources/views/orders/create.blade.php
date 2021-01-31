@extends('layouts.master')
@section('content')
<h2> Create New Order</h2><hr>
<form method="POST" action="{{url('/orders')}}">
    @csrf
    {{-- name --}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
     {{-- price --}}
     <div class="form-group">
        <label for="price">Phone</label>
        <input type="text" class="form-control" name="phone">
      </div>
       {{-- cat_id--}}
    <div class="form-group">
        <label for="cat_id">product</label>
        <input type="hidden" class="form-control" name="pro_id" value="{{$product->id}}">
        <input type="text" class="form-control" value="{{$product->name}}">
      </div>
     
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form><br>
@endsection