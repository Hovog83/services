<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index(){
        
        return view('front.index');
    }
    public function register(Request $request){
        if($request->isMethod('post')){
            $rules = [
                "firstname" => "required" ,
                "lastname" => "required" ,
                "email" => "required|email|unique:users",
                "password" => "required|confirmed|min:6|max:20",
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())->withInput(Input::except([
                    'password',
                    'password_confirmation'
                ]));
            }

            $user = User::_save($request, @$request->id);//kara lini null
            if ($user) {
                return redirect('/');
            }
        }
        return view('front.register');
    }
   /* public function login(Request $request){
        $salt        = User::getSaltByEmail($request->email);
        $credentials = [
            'role'     => User::ROLE_USER,
            'email'    => $request->email,
            'password' => $request->password . $salt
        ];
        if (Auth::attempt($credentials, true)) {
            return redirect('back/admin');
        }
    }*/
}

