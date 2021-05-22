<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdetails</title>
</head>
<form action="/edit" method="post">
@csrf 
<div class="container" style="margin-top: 100px;">
 <div class="row">
<div class="col-md-12"><h1>Edit Products</h1>

<table class="table  table-striped table-responsive table-right">
<input type="hidden" name="id" value="{{$data['id']}}">
<input type="text" name="name" value="{{$data['name']}}"><br><br> 
<input type="text" name="size" value="{{$data['size']}}"><br><br> 
<input type="text" name="color" value="{{$data['color']}}"><br><br> 
<input type="text" name="category" value="{{$data['category']}}"> <br><br>
<input type="text" name="price" value="{{$data['price']}}"> <br><br>
<input type="text" name="brand" value="{{$data['brand']}}"><br><br> 
<input type="text" name="quantity" value="{{$data['quantity']}}"><br><br> 
<input type="text" name="gallery" value="{{$data['gallery']}}"><br><br> 
<button type="submit">EDIT</button>
</form>
</div>
</div>
</div>
</table>
<style>
   body {
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAsCBMVo1pxzfv_5ZBQ_WYjVwQokaqRcMJeQ&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 10vh;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
</html>
 