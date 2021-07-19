@extends('master')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/">Go Back</a>
       <h2>{{$product['name']}}</h2>
       <h3>Size : {{$product['size']}}</h3>
       <h4>Color: {{$product['color']}}</h4>
       <h4>Category: {{$product['category']}}</h4>
       <h3>Price: {{$product['price']}}</h3>
       <h3>Quantity : {{$product['quantity']}}</h3>
       <h3>Size : {{$product['size']}}</h3>

       <br><br>
        <form action="/add_to_cart" method="POST" >
          @csrf
          <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>

    </div>
   </div>
</div>
@endsection
<style>
   body {
  background-image: url('data:image/jpeg;base64,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');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 10vh;
}
       </style>
