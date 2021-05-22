
@extends('master')
@section('content')
<div class="container custom-admin">
<div class="row">
<div class=" col-sm-4 col-sm-offset-4">
<form action="admin" method="post">
  <div class="form-group"><br><br><br><br><br>
  @csrf
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
  <style>
   body {
  background-image: url('https://media.istockphoto.com/photos/defocused-view-of-a-shoe-store-picture-id1152132769?k=6&m=1152132769&s=612x612&w=0&h=32se6BDFWTCSvHRT8r1in07pRzk-eXDcaG6hic2bRVM=');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 20vh;
}
</style>
</form>
</div>
</div>
</div>

@endsection
