<?php

namespace App\Http\Controllers\Auth\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginShopRequest;
use App\Http\Service\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginShopController extends Controller
{
    public function showFormLogin()
    {
        $cart = session('cart');
        return view('shop.auth.login', compact('cart'));
    }

    public function login(LoginShopRequest $request)
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
            $message = 'welcome '. Auth::user()->name;
            session()->flash('login-success', $message);
            return redirect()->route('shop.index');
        } else {
            $message = 'tai khoan mat khau khong dung';
            session()->flash('login-error', $message);
            return back();
        }
    }
}
