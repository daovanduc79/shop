<?php

namespace App\Http\Controllers;

use App\Http\Service\UserService;
use App\User;
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

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->password === $request->comfirmPassword) {
            $user->password = $request->password;
        } else {
            $message = 'mat khau khong trung khop';
            session()->flash('create-error', $message);
            return back();
        }

        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('images', 'public');
            $user->image = $path;
        } else {
            $user->image = 'images/default';
        }
        $message = 'them moi thanh cong';
        session()->flash('success',$message);

        return redirect()->route('users.index');
    }
}
