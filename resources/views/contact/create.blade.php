@extends('layouts.master')
@section('content')
<h2> Contact Us</h2><hr>
<form method="POST" action="{{url('/contacts')}}">
    @csrf
    {{-- name --}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    
       {{-- Message--}}
    <div class="form-group">
        <label for="cat_id">Message</label>
        <textarea type="text" class="form-control" name="message"></textarea>
      </div>
     
    <button type="submit" class="btn btn-primary">Submit</button>
  </form><br>
@endsection