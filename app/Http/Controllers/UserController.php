<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('User.user_login');
    }
    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('index');
        } else {
            return redirect()->route('user.login')->with('error', 'Tài khoản hoặc mật khẩu không chính xác');
        }
    }
    public function register(){
        return view('User.user_register');
    }
    public function postRegister(Request $request)
    {
        if($request->password==$request->confirmPassword){
        $request->merge(['password' => Hash::make($request->password)]);
        User::create($request->all());
        return redirect()->route('user.login')->with('success','Đăng ký thành công');
        } else return redirect()->back()->with('error','Mật khẩu không trùng khớp');
    }
    public function list_1()
    {
        return view('user.list-1');
    }
    public function list_2()
    {
        return view('user.list-2');
    }
    public function list_3()
    {
        return view('user.list-3');
    }
    public function list_4()
    {
        return view('user.list-4');
    }
    public function list_5()
    {
        return view('user.list-5');
    }  public function gioithieu()
    {
        return view('user.gioithieu');
    }
    public function new()
    {
        return view('user.new');
    }
    public function tracuu()
    {
        return view('user.tracuu');
    }
    public function spct()
    {
        return view('user.spct');
    }
}
