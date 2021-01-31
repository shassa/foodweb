@extends('layouts.master')
@section('content')
<h2> Create New Product</h2><hr>
<form method="POST" action="{{url('/products')}}" enctype="multipart/form-data">
    @csrf
    {{-- name --}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
     {{-- price --}}
     <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price">
      </div>
       {{-- cat_id--}}
    <div class="form-group">
        <label for="cat_id">Cat_id</label>
        <input type="text" class="form-control" name="cat_id">
      </div>
       {{-- photo --}}
    <div class="form-group">
        <label for="photo">photo</label>
        <input type="file" class="form-control" name="photo">
      </div>
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form><br>
@endsection