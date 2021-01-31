@extends('layouts.master')
@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

@if(session()->has('name'))
<a href="{{url('products/create')}}" class="btn btn-outline-success">Create</a>
    @endif

    <hr>

{{-- <table class="table table-striped table-hover">
    <thead class="bg-black text-lieght">
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">photo</th>
          <th scope="col">Cat_id</th>
          <th scope="col">operation</th>
        </tr>
      </thead>
      <tbody> --}}
        <div class="row">
        @foreach ($products as $item)     

        <div class="card m-2" style="width: 14rem;">
              @if($item->photo)
              <img src="{{asset('storage/storage/'.$item->photo)}}"height="120" >
              @else
              <p> No photo</p>
              @endif
          <div class="card-body">
            <div>
            <h5 class="card-title d-inline">{{$item->name}}/ </h5>
            <h4 class="d-inline">{{$item->category->where('id','=',$item->cat_id)->first()->name}}</h4>
            </div>
            <h1 class="card-text d-inline">{{$item->price}} </h1>
          
          <a href="{{url('/orders/create/'.$item->id)}}" class="btn btn-primary m-2 p-2">Ordder</a>
          @if(session()->has('name'))
          <div>
            <form action="{{url('/products/'.$item->id)}}" method="POST" class="d-inline">
              @csrf
              @method('delete')
                 <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you Sure?')">Delete</button>
              </form>
              <a href="{{url('/products/'.$item->id.'/edite')}}" class="btn btn-outline-info m-2">Edite</a>
  
          </div>
          @endif

          </div>
        </div>

     @endforeach
        </div>




{{-- 




          @foreach ($products as $item)     
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->price}}</td>
          <td>
            @if($item->photo)
            <img src="{{asset('storage/storage/'.$item->photo)}}" height="50px">
            @else
            <p> No photo</p>
            @endif
            </td>
            {{-- <td>{{$item->category->name}}</td> --}}
            {{-- <td>{{$item->category->where('id','=',$item->cat_id)->first()->name}} </td>

          <td>
            <form action="{{url('/products/'.$item->id)}}" method="POST" class="d-inline">
            @csrf
            @method('delete')
               <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you Sure?')">Delete</button>
            </form>
            <a href="{{url('/products/'.$item->id.'/edite')}}" class="btn btn-outline-secondary">Edite</a>

          </td>

        </tr>
        @endforeach

  </table>  --}}
 
@endsection
