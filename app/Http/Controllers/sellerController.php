<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sellerController extends Controller
{
    public function seller(){
//        dd("HELLO");
        return view('seller');
    }
}
