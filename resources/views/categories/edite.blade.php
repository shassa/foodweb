@extends('layouts.master')
@section('content')
<h2> Edite Category</h2><hr>
<form method="POST" action="{{url('/categories/'.$category->id)}}">
    @csrf
    @method('put')
    {{-- name --}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" value="{{$category->name}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form><br>
@endsection