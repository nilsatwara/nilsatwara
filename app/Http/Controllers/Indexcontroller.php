<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;

class Indexcontroller extends Controller
{
 public function Index(){
    

     return Member::with('Group')->get();
 }

 public function Group(Group $group){
    

    // return Group::with('Member')->get();
    return $group;
}
}
