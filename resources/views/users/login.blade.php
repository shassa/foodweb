@include('includes.header')
<br>
<div class="row">
  <div class="col-3"></div>
  <div class="col-6">
<h2>Log In</h2><hr>
<form method="POST" action="{{url('/login')}}">
    @csrf
     {{-- price --}}
     <div class="form-group">
        <label for="price">Email</label>
        <input type="text" class="form-control" name="email">
      </div>
       {{-- cat_id--}}
    <div class="form-group">
        <label for="cat_id">Password</label>
        <input type="password" class="form-control" name="password">
      </div>
      
      
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{url('/products')}}" class="btn btn-warning">Order Meal</a>

  </form>
</div>
  <div class="col-3"></div>

  @include('includes.footer')
