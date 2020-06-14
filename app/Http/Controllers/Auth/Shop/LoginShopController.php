<?php

namespace App\Http\Controllers\Auth\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginShopRequest;
use App\Http\Service\CustomerService;
use Brian2694\Toastr\Facades\Toastr;
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

        if (Auth::attempt($user)) {
            Toastr::success('Welcome ' . Auth::user()->name, 'Đăng nhập thành công!', ["positionClass" => "toast-top-center", "progressBar" => true]);
            return redirect()->route('shop.index');
        } else {
            Toastr::error('Tài khoản mật khẩu không đúng', 'False!', ["positionClass" => "toast-top-center", "progressBar" => true]);
            return back();
        }
    }
}
