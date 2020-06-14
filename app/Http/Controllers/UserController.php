<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UserRequest;
use App\Http\Service\UserService;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
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
        $users = $this->userService->paginate(5);
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $user = $this->userService->create();
        $this->userService->store($user, $request);

        Toastr::success('Thêm mới thành công !', 'Succcess', ["positionClass" => "toast-top-center" , "progressBar" => true]);

        return redirect()->route('users.index');
    }


    public function delete($id)
    {
        $this->userService->delete($id);
        Toastr::success('Xóa thành công !', 'Succcess', ["positionClass" => "toast-top-center" , "progressBar" => true]);

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

        Toastr::success('Chỉnh sửa thành công !', 'Succcess', ["positionClass" => "toast-top-center" , "progressBar" => true]);

        return redirect()->route('users.index');
    }
}
