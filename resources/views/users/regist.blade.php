@include('includes.header')
<br>
<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
<h2>Make New Admin</h2><hr>
<form method="POST" action="{{url('/regist')}}">
    @csrf
    {{-- name --}}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
     {{-- price --}}
     <div class="form-group">
        <label for="price">Email</label>
        <input type="text" class="form-control" name="email">
      </div>
       {{-- cat_id--}}
    <div class="form-group">
        <label for="cat_id">Password</label>
        <input type="text" class="form-control" name="password">
      </div>
      
      
    <button type="submit" class="btn btn-primary">Submit</button>
  </form><br>
</div>
<div class="col-3"></div>

@include('includes.footer')
