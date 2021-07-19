<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdetails</title>
</head>
<div class="container" style="margin-top: 100px;">
        <div class="row">
        <h1><centre><div class="p-3 mb-2 text-black ">USER DETAILS</div></centre></h1>
           <!-- <h2 class="display-4 text-primary">USER DETAILS</h2> -->
            <div class="col-md-12">
                <table class="table shadow table-hover table-striped bg-light">
                    <thead class="thead-dark">

                        <tr class="dark">
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>password</th>
                        </tr>
                         </thead>
                    <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->password}}</td>

                        <style>
                        body {
                        background-image: url(' https://files.123freevectors.com/wp-content/original/117151-abstract-light-blue-bokeh-lights-background-vector.jpg');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-size: cover;
                        height: 20vh;
                        }
                        </style>

                    @endforeach

            </tr>
                    </tbody>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
                </table>
            </div>
        </div>
    </div>
    </head>
    </html>

