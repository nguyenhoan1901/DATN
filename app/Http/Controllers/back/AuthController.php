<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function back_get_login(){
        // $user = new User();
        // $user->name = "Admin";
        // $user->username = "admin";
        // $user->email = "admin@gmail.com";
        // $user->password = Hash::make('123456');
        // $user->is_admin = 1;
        // $user->save();
//        Auth::loginUsingId(1, true);
        if (Auth::check()){
            return redirect()->route('home');
        }
        return view('back.page.auth.login');
    }
    public function back_post_login(Request $request){
        $credentials = $request->only('username', 'password');
        $remember = 0;
        if($request->remember == "on"){
            $remember = 1;
        }
        if (Auth::attempt($credentials, $remember)) {
            Auth::user();
            return redirect()->route('home');
        } else {
            return redirect()->back()->withInput()->with('error', 'Wrong information, please try again!');
        }

    }

    public function password_forgot() {
        return view('back.page.auth.forgot_password');
    }

    public function password_reset(Request $request) {
        $email = $request->get('email');
        $user = User::where('email',$email)->firstOrFail();
        $password = Str::limit(md5(time().rand(1,99999)), 8, '');
        Mail::send('welcome', [], function($message) {
            $message->to('vuhaicn93@gmail.com')->subject('Testing mails')->from('vudinhhaicn@gmail.com');
        });
//        Mail::to($email)->send($this->sendEmailResetPassWord($password));
        $user->password = Hash::make($password);
//        $user->save();
        return view('back.page.auth.login')->with('success', 'Bạn vui lòng check email để lấy mật khẩu !');;
    }

    public function sendEmailResetPassWord($password) {
        return view('back.page.auth.email_reset')
            ->with([
                'password' => $password
            ]);
    }

    public function back_get_logout(){
        Auth::logout();
        return redirect()->route('back_get_login')->with('success', 'Logout success');
    }
}
