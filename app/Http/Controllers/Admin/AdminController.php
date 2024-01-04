<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.admin_login');
    }
    public function dashboard(){
        return view('Admin.dashboard');
    }
    public function order(){
        return view('Admin.order');
    }
    public function login(Request $request){
        $admin_username = $request->admin_name;
        $admin_password = $request->admin_pass;
        $result = Admin::where('username', $admin_username)->where('password', $admin_password)->first();
        if ($result) {
            Session()->put('admin_username', $result->username);
            Session()->put('admin_id', $result->id);
            return redirect()->route('admin.dashboard');
        } else {
            Session()->put('msg', 'Tài khoản hoặc mật khẩu không chính xác');
            return redirect()->route('admin.index');
        }
    }
    public function logout(){
        Session()->put('admin_username',null);
        Session()->put('admin_id',null);
        return redirect()->route('admin.index');
    }
}
