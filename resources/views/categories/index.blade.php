@extends('layouts.master')
@section('content')
@if(session()->has('name'))
<a href="{{url('categories/create')}}" class="btn btn-outline-success">Create</a>
@endif
<hr>
<table class="table table-striped table-hover">
    <thead class="bg-black text-lieght">
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Name</th>
          <th scope="col" colspan="2">operation</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($category as $item)     
      <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td><a href="{{url('/products/'.$item->id)}}" class="btn btn-outline-info">See Products</a></td>
          @if(session()->has('name'))
          <td>
            <form action="{{url('/categories/'.$item->id)}}" method="POST" class="d-inline">
            @csrf
            @method('delete')
               <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you Sure?')">Delete</button>
            </form>
            <a href="{{url('/categories/'.$item->id.'/edite')}}" class="btn btn-outline-secondary">Edite</a>

          </td>
       @endif
        </tr>
        @endforeach

  </table>
@endsection