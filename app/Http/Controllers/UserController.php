<?php

namespace App\Http\Controllers;

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
        $keyword = '';
        return view('admin.users.list', compact('users', 'keyword'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $user = $this->userService->create();
        $user = $this->userService->store($user, $request);
        if ($user->password === null) {
            $message = 'mat khau khong trung khop';
            session()->flash('create-error', $message);
            return back();
        } else {
            $this->userService->save($user);
            $message = 'them moi thanh cong';
            session()->flash('success', $message);
            return redirect()->route('users.index');
        }
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

    public function update($id, Request $request)
    {
        $user = $this->userService->findOrFail($id);
        $user = $this->userService->update($user, $request);
        $this->userService->save($user);

        $message = 'cap nhat thanh cong !!!';
        session()->flash('success', $message);
        return redirect()->route('users.index');
    }

    public function search(Request $request, User $user)
    {
        $keyword = $request->keyword;
        $users = $this->userService->search($keyword);
        return view('admin.users.list', compact('users', 'keyword'));
    }
}
