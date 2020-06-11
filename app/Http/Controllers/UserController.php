<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Service\UserService;
use App\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    protected $userService;


    public function __construct(UserService $userService)
    {
        $this->userService = $userService;

    }

    public function index()
    {
        $users = $this->userService->all();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
        $user = $this->userService->create();
        $this->userService->store($user, $request);

        $message = 'them moi thanh cong';
        session()->flash('success', $message);
        return redirect()->route('users.index');
    }


    public function delete($id)
    {
        $this->userService->delete($id);
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = $this->userService->findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update($id,UserRequest $request)
    {
        $user = $this->userService->findOrFail($id);
        $this->userService->update($user, $request);

        $message = 'cap nhat thanh cong !!!';
        session()->flash('success', $message);
        return redirect()->route('users.index');
    }
}
