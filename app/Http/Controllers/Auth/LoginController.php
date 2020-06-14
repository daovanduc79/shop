<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RoleConstant;
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

        if (Auth::attempt($user)) {
            if (Auth::user()->role === RoleConstant::ADMIN or Auth::user()->role === RoleConstant::USER) {
                Toastr::success('Đăng nhập thành công !', 'Welcome ' . Auth::user()->name, ["positionClass" => "toast-top-center", "progressBar" => true]);
                return redirect()->route('admin.home');
            } else {
                Toastr::error(
                    'Đăng nhập thất bại !',
                    'False',
                    ["positionClass" => "toast-top-center", "progressBar" => true]
                );
                return back();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        Toastr::warning(
            'Bạn đã đăng xuất !',
            'Warning',
            ["positionClass" => "toast-top-center", "progressBar" => true]
        );
        return redirect()->route('formLogin');
    }
}
