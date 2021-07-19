<!-- "id": 1,
"product_id": 10,
"user_id": 2,
"status": "pending",
"payment_method": "cash",
"payment_status": "pending",
"address": "karackattu(h),kottayam",
"created_at": null,
"updated_at": null,
"name": "Monk Shoes",
"size": "38",
"color": "brown",
"category": "men",
"price": "190",
"brand": "Leather",
"quantity": "1",
"gallery": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6AzO8q6eOza4YSVltKg1wpXkHWcYiND7o5IG1avPQ_YSqGIXEKERhg5CsD3PpmoWyMVv3jRCX&usqp=CAc"
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
 <div class="container" style="margin-left: 40px;">
        <div class="row">
        <h1><centre><div class="p-3 mb-2 text-black ">PURCHASED ITEMS DETAILS</div></centre></h1>

            <div class="col-md-12">
<table class="table  table-striped table-responsive table-right">
<h1><thead class="thead-dark">
 <tr class="dark">
 <th scope="col">id</th>
 <th scope="col">product_id</th>
 <th scope="col">user_id</th>
 <th scope="col">status</th>
 <th scope="col">payment_method</th>
 <th scope="col">payment_status</th>
 <th scope="col">address</th>
 <th scope="col">name</th>
 <th scope="col">size</th>
 <th scope="col">color</th>
 <th scope="col">category</th>
 <th scope="col">price</th>
 <th scope="col">brand</th>
 <th scope="col">quantity</th>
 <th scope="col">gallery</th>
 </tr>
 </thead>
<tbody></h1>
@foreach($data as $d)
 <tr>
 <td>{{$d->id}}</td>
 <td>{{$d->product_id}}</td>
 <td>{{$d->user_id}}</td>
 <td>{{$d->status}}</td>
 <td>{{$d->payment_method}}</td>
 <td>{{$d->payment_status}}</td>
 <td>{{$d->address}}</td>
 <td>{{$d->name}}</td>
 <td>{{$d->size}}</td>
 <td>{{$d->color}}</td>
 <td>{{$d->category}}</td>
 <td>{{$d->price}}</td>
 <td>{{$d->brand}}</td>
 <td>{{$d->quantity}}</td>
 <td><img src={{$d->gallery}}/> </td>


@endforeach
</tbody>
</table>
</div>
</div>
</div>

</html>
 <style>
        body {
        background-image: url('https://files.123freevectors.com/wp-content/original/117151-abstract-light-blue-bokeh-lights-background-vector.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 20vh;
                    }
</style>
