<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
            if (Auth::user()->role === 1 or Auth::user()->role === 2)
            {
                return redirect()->route('admin.home');
            } else {
                session()->flash('error-login','ban khong co quyen');
                return back();
            }
        } else {
            session()->flash('error-login','tai khoan mat khau khong dung');
            return back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('formLogin');
    }
}
