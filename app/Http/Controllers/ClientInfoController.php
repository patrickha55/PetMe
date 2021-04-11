<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientInfoController extends Controller
{
    public function index(){ 
        return view('user.info');
    }
}
