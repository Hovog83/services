<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('front.login');
    }
    public function register(Request $request){

    }
}

