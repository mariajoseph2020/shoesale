@extends('master')
@section("content")    
<div class="container custom-adminregister">
<div class="row">
<div class=" col-sm-4 col-sm-offset-4">

<form action="adminregister" method="post">
@csrf
<h4><centre><b>ADMIN</h4>
<div class="form-group">
<label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="name" class="form-control" id="exampleInputUsername1" placeholder="Username">
    </div>
  <div class="form-group">
  <label for="exampleInputEmail1" class="form-label"></label>Email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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