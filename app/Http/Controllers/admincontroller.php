<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Models;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\cart;
use App\Models\order;
use App\Models\product;
use App\Models\User;


class admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    
    function admin(Request $req)
    {
        $admin= admin::where(['email'=>$req->email])->first();
            if(!$admin || !Hash::check($req->password,$admin->password))
        {
            return "Incorrect username or password";
        }
        else
        {
            $req->session()->put('admin',$admin);
            return redirect('/admintheme');
        }
    }
    function adminregister(Request $req)
    {
        $admin= new admin;
        $admin->name=$req->name;
        $admin->email=$req->email;
        $admin->password=Hash::make($req->password);
        $admin->save();
        return redirect('/admin');
    }
    public function show()
    {
        
        return view('admintheme');
    }

    public function index()
    {
        
        return view('addproduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getallpurchaseditems()
    {
      $data=order::join('products','orders.id','=','products.id')->get();
      return view('purchaseditems',compact('data')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getalluserdetails()
    {
        $data = product::join('users','products.id','=','users.id')->get();
        return view('userdetails',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addproduct(Request $req){
        // ["Name"]=> string(5) "dsdsd" ["size"]=> string(2) "30" ["color"]=> string(3) "red" ["category"]=> string(3) "men" ["Price"]=> string(3) "800" ["Brand"]=> string(4) "nike" ["Quantity"]=> string(1) "2" }
        $data=$req->input();
        $name = $data['Name'];
        $size = $data['size'];
        $color = $data['color'];
        $category = $data['category'];
        $price = $data['Price'];
        $brand = $data['Brand'];
        $quantity = $data['Quantity'];
        $gallery = $data['gallery'];
        $p = new product();
        $p->name  = $name;
        $p->size = $size;
        $p->color = $color;
        $p->category = $category;
        $p->price = $price;
        $p->brand = $brand;
        $p->quantity = $quantity;
        $p->gallery = $gallery;
        $p->save();

       // var_dump($data);
        return view('admintheme');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showdata($id)
    {
        $data=product::find($id);
        return view('edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
          $data=product::find($id);
          $data->delete();
          return redirect('allproducts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function allproducts()
    {
        $data=product::all();
        return view('allproducts',compact('data'));
    }
    public function edit(Request $req)
    {
        
        $data=product::find($req->id);
          $data->name=$req->name;
          $data->size=$req->size;
          $data->color=$req->color;
          $data->category=$req->category;
          $data->price=$req->price;
          $data->brand=$req->brand;
          $data->quantity=$req->quantity;
          $data->gallery=$req->gallery;
          $data->save();
          return redirect('allproducts');
    }

}

