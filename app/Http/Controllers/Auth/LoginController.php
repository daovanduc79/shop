<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function showFormLogin()
    {
        return view('login.login');
    }

    function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = [
            'username' => $email,
            'password' => $password,
            'active' => true
        ];

        if (Auth::attempt($user))
        {
<<<<<<< HEAD
            Toastr::success('Đăng nhập thành công !', 'Welcome', ["positionClass" => "toast-top-center","progressBar" => true]);
            return redirect()->route('admin.home');
=======
            if (Auth::user()->role === 1 or Auth::user()->role === 2)
            {
                return redirect()->route('admin.home');
            } else {
                session()->flash('error-login','ban khong co quyen');
                return back();
            }
>>>>>>> 442c4fa4575abdfa47545ed7979a27340e19317e
        } else {
            session()->flash('error-login','tai khoan mat khau khong dung');
            Toastr::error('Đăng nhập thất bại !', 'False', ["positionClass" => "toast-top-center" , "progressBar" => true]);
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        Toastr::warning('Bạn đã đăng xuất !', 'Warning', ["positionClass" => "toast-top-center" , "progressBar" => true]);
        return redirect()->route('formLogin');
    }
}
