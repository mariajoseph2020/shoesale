@extends('master')
@section('content')
<div class="container custom-login">
<div class="row">
<div class=" col-sm-4 col-sm-offset-4">
<form action="register" method="post">
@csrf
<div class="form-group">
  <label for="exampleInputEmail1" class="form-label">Username</label>
  <span class="text-danger">@error('rname'){{$message}} @enderror  </span>
    <input type="text" name="name" class="form-control" id="exampleInputUsername1"  placeholder="Username" required>
    </div>
  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label"></label>Email</label>
  <span class="text-danger">@error('rname'){{$message}} @enderror  </span>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <span class="text-danger">@error('rname'){{$message}} @enderror  </span>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
<style>
   body {
  background-image: url('https://st4.depositphotos.com/1558912/21028/i/1600/depositphotos_210281662-stock-photo-woman-fashion-pink-shoes-on.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 20vh;
}
</style>
</div>
</div>
</div>

@endsection
