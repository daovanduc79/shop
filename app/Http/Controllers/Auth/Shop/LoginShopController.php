<?php

namespace App\Http\Controllers\Auth\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginShopController extends Controller
{
    public function showFormLogin()
    {
        return view('shop.auth.login');
    }

    public function login()
    {

    }
}
