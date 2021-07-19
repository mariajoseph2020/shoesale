<!DOCTYPE html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashion Feet</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="bg-image"

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 ">
 </div>
 <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 ">
 <br><br>
 <form action="/addproduct/add" method="post" enctype="multipart/form-data">
   @csrf
    <br>

 <table class="table table-dark table-borderless "id="ip3" >


<tr><td></td><td><h2><b>ADD PRODUCT</b></h2> </td></tr>


 <tr>
     <td><center> Name</center></td>
     <td><input name="Name"   type="text" class="form-control"  placeholder=" Name" required>
  </td>
 </tr>
 <tr>
     <td><center>size</center></td>
     <td><input name="size" type="number" min=1 max=100  default value hidden=1 class="form-control"  placeholder="size" required>
     </td>
 </tr>
 <tr>
     <td><center>color</center></td>
     <td><input name="color"   type="text" class="form-control" placeholder=" color" required>

     </td>
 </tr><tr>
     <td><center>category</center></td>
     <td><input name="category"   type="text" class="form-control" placeholder="category" required>

     </td>
 </tr>
 <tr>
     <td><center>Price</center></td>
     <td><input name="Price"  type="number" class="form-control" placeholder=" Price" required>

     </td>
 </tr>
 <tr>
     <td><center>Brand</center></td>
     <td><input name="Brand"   type="text" class="form-control" placeholder=" Brand" required>

     </td>
 </tr>
 <tr>
     <td><center>Quantity</center></td>
     <td><input type="number"  min=1 max=100 default value hidden=1  input name="Quantity"    class="form-control" placeholder=" Quantity" required>

     </td>
 </tr>



 <tr>
    <td><center>gallery :</center></td>
    <td><input type="text" name="gallery" class="form-control" placeholder=" gallery" required></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="add" /> </td>

 </tr>



 </form>
 </table>
 </div>

 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">

 </div>
</div>
</div>
</div>
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
