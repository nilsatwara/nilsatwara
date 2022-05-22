<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demo extends Controller
{
   public function index(){
       return view('home1');
   }

   public function about1(){
   return view("about1");
}

}