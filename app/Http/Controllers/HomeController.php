<?php

namespace App\Http\Controllers;


use App\Http\Service\PetService;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{

    function index() {
        return view('shop.home');
    }

}

