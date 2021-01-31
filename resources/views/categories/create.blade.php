@extends('layouts.master')
@section('content')
<h2> Create New Category</h2><hr>
<form method="POST" action="{{url('/categories')}}">
    @csrf
    {{-- name --}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
     
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form><br>
@endsection