@extends('layouts.master')
@section('content')
<h2> Edite Product</h2><hr>
<form method="POST" action="{{url('/products/'.$product->id)}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    {{-- name --}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" value="{{$product->name}}">
    </div>
     {{-- price --}}
     <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" value="{{$product->price}}">
      </div>
       {{-- cat_id--}}
    <div class="form-group">
        <label for="cat_id">Cat_id</label>
        <input type="text" class="form-control" name="cat_id" value="{{$product->cat_id}}">
      </div>
       {{-- photo --}}
    <div class="form-group">
        <label for="photo">photo</label>
        <input type="file" class="form-control" name="photo" value="{{$product->photo}}">
        @if($product->photo)
        <img src="{{asset('storage/storage/'.$product->photo)}}" height="50px">
        @endif
      </div>
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form><br>
@endsection