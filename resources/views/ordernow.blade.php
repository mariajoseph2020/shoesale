@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">

            <tbody>
              <tr>
                <td>Amount</td>
              <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery Charges</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>$ {{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Online Payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Cash on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
     </div>
</div>
@endsection
<style>
   body {
  background-image: url('https://media.istockphoto.com/photos/abstract-blurred-blue-background-with-double-exposure-of-bokeh-circle-picture-id1153938533?k=6&m=1153938533&s=612x612&w=0&h=QZDZDRy-aPOzITXqe5BwvoLckHf__Pb0UOCMU-_VIpw=');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 10vh;
}
       </style>
