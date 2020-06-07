<?php

namespace App\Http\Controllers;

use App\Http\Service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $users;

    public function __construct(UserService $userService)
    {
        $this->users = $userService;
    }

    public function index()
    {
        $users = $this->users->all();
        return view('admin.users.list', compact('users'));
    }
}
