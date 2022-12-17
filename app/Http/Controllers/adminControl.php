<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class adminControl extends Controller
{
    //
    public function user(){
        $data=User::all();
        return view("admin.users",compact("data"));
    }
}
