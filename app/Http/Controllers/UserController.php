<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
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
    public function register()
    {
        return view('User.user_register');
    }
    public function postRegister(RegisterRequest $request)
    {
        if ($request->password == $request->confirmPassword) {
            $request->merge(['password' => Hash::make($request->password)]);
            User::create($request->all());
            return redirect()->route('user.login')->with('success', 'Đăng ký thành công');
        } else return redirect()->back()->with('error', 'Mật khẩu không trùng khớp');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
    

}
