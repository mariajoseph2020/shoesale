@extends('master')
@section("content")
<div class="custom-product">
          <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class= "btn btn-success" href="ordernow">Order Now</a> <br><br>
            @foreach($products as $item)
            <div class="row searched-item cart-list-devider ">
            <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
                    <img class="new-arrival" src="{{$item->gallery}}">
                 </a>
             </div>
             <div class="col-sm-4">
                      <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->price}}</h5>
                      </div>
             </div>
             <div class="col-sm-3">
             <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove </a>
             </div>
            </div>
            @endforeach
          </div>
          <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
          </div>
</div>
@endsection
<style>
   body {
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuzQeFsyvXWNrVAcNFumA8LTuKuk0oTStH4KVVYt91mcYEkqp2uXRHpoBJ4ARugdWnIrU&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 10vh;
}
       </style>
