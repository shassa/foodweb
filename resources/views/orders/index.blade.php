
@extends('layouts.master')
@section('content')
<h2>Order list</h2>
<hr>
<table class="table table-striped table-hover">
    <thead class="bg-black text-lieght">
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Product</th>
          <th scope="col" colspan="2">operation</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($order as $item)     
      <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->phone}}</td>
          <td>{{$item->product->name}}</td>
          <td>
            <form action="{{url('/categories/'.$item->id)}}" method="POST" class="d-inline">
            @csrf
            @method('delete')
               <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you Sure?')">Delete</button>
            </form>

          </td>

        </tr>
        @endforeach

  </table>
@endsection