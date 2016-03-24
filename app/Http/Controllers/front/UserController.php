<?php

namespace App\Http\Controllers\front;
use App\Models\common\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function auth(Request $request){
        if($request->isMethod('post')){
            $rules = [
                "email" => "required|email",
                "password" => "required|min:6|max:20",
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator->errors())
                    ->withInput(Input::except([
                        'password',
                    ])
                );
            }
            $status = User::getStatusByEmail($request->email);
            if(!$status){
                $this->register($request);
                $request->session()->flash('message', 'Please verify your email to login!');
                return redirect()->back();
            }elseif($status == 'BLOCKED'){
                $request->session()->flash('message', 'Please verify your email to login!');
                return redirect()->back();
            }

            $salt        = User::getSaltByEmail($request->email);
            $credentials = [
                'email'    => $request->email,
                'password' => $request->password . $salt
            ];
            $remember = ($request->remember == 'on')?true:false;
            if (Auth::attempt($credentials, $remember)) {
                return redirect('admin');
            }
            return redirect()->back()->withErrors(['form' => 'Invalid Username or Password'])->withInput(Input::except(['password']));
        }
        $title = 'Login';

        return view('front.login', ['title' => $title]);
    }

    public function register($request){
        if ($token = User::_save($request)) {

            Mail::send('emails.welcome',['token'=>$token],function ($message) use ($request){
                $message->to($request->email)->subject('Service Password Reset');
            });
        }
    }


    public function activeLogin(Request $request, $token){
        if(User::checkToken($token)){
            User::updateStatus($token);
        }
        return view('front.login');
    }
    public function userAccount(){
        return view('front.userAccount');
    }
    public function verify(){
        return view('front.verify');
    }

//    public function login(Request $request){
//        $salt        = User::getSaltByEmail($request->email);
//        $credentials = [
//            'role'     => User::ROLE_USER,
//            'email'    => $request->email,
//            'password' => $request->password . $salt
//        ];
//       // if (Auth::attempt($credentials, true)) {
//       //     return redirect('back/admin');
//       // }
//        return view('front.login');
//    }
}
