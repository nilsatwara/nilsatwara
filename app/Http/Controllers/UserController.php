<?php

namespace App\Http\Controllers;
// use CI_Router;
// use CuteSoftAjaxContext;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function Index()
    {
        return view('form');
    }

    public function Register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirmation' => 'required|same:password'

            ]
        );
            
    }

    public function upload(Request $request){
$fileName = time(). "nk." .$request->file('photo')->getClientOriginalExtension();
      echo $request->file('photo')->storeAs('uploads',$fileName);
       return view('upload');
    }
}   
