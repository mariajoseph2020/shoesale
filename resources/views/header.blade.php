<?php 
use App\Http\Controllers\productcontroller;
$total=0;
if(Session::has('user'))
{
  $total= productcontroller::cartitem();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <b><a class="navbar-brand" href="/">Fashion Feet</a><b>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">   
        <ul class="nav navbar-nav">
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/myorders">Orders</a></li>
          
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query" class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist">cart({{$total}})</a></li>
        
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
          @else
          <ul class="nav navbar-nav navbar-right">
          <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Admin
         <span class="caret"></span></button>
         <ul class="dropdown-menu">
         <li><a href="/admin">Login</a></li>
         <li><a href="/adminregister">Regsiter</a></li>
         </ul>
         </ul>
         </div>
         <ul class="nav navbar-nav navbar-right">
         <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">User
         <span class="caret"></span></button>
         <ul class="dropdown-menu">
          <li><a href="/login">Login</a></li>
          <li><a href="/register">Register</a></li>
          @endif
        </ul>
        </ul>
        </div>
        </div>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  