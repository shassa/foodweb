@extends('layouts.master')
@section('content')
<h2>Contacts Messages</h2>
<hr>
<table class="table table-striped table-hover">
    <thead class="bg-black text-lieght">
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Name</th>
          <th scope="col">Message</th>
          <th scope="col">Delete</th>

        </tr>
      </thead>
      <tbody>
          @foreach ($contacts as $item)     
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->message}}</td>
          <td>
            <form action="{{url('/contacts/'.$item->id)}}" method="POST" class="d-inline">
            @csrf
            @method('delete')
               <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you Sure?')">Delete</button>
            </form>

          </td>

        </tr>
        @endforeach

  </table>
@endsection