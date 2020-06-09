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
            'password' => $password
        ];

        if (Auth::attempt($user))
        {
            return redirect()->route('admin.home');
        } else {
            session()->flash('error-login','tai khoan mat khau khong chinh xac');
            return back();
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('formLogin');
    }
}
