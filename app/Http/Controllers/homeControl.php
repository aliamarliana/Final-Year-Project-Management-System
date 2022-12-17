<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class homeControl extends Controller
{
    public function index(){
        return view('home');
    }

    public function redirectFunct(){
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1'){
            return view('admin.adminpage');
        }
        else{
            return view('home');
        }

    }
}
