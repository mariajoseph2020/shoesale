@extends('master')
@section('content')
<div class="container custom-login">
<div class="row">
<div class=" col-sm-4 col-sm-offset-4">
<form action="login" method="post">
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
  background-image: url('https://previews.123rf.com/images/halfpoint/halfpoint1505/halfpoint150500274/39899199-various-running-shoes-laid-on-a-wooden-floor-background.jpg');
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
