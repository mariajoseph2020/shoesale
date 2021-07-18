<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
class usercontroller extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
            if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Incorrect username or password";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function register(Request $req)
    {
        $this->validate($req,[
            'name' => 'required',
            'email' => 'required|unique:App\Models\User,email',
            'password' => 'required|min:5',
        ]);
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
    }


