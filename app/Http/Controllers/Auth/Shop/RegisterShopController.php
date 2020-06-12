<?php

namespace App\Http\Controllers\Auth\Shop;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RoleConstant;
use App\Http\Requests\UserRequest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterShopController extends Controller
{
    public function showFormRegister()
    {
        return view('shop.auth.register');
    }

    public function registerActive(Request $request)
    {
//        dd($request);
        $activation_code = time() . uniqid(true);
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->role = RoleConstant::MEMBER;
        $user->activation_code = $activation_code;
        $user->active = false;
        $user->save();

        $data = [
            'user' => $user
        ];

        Mail::send('email.user-activation', $data, function ($message) use ($request) {
            $message->from('duc07092000@gmail.com', 'duc');
            $message->to($request->email, $request->name)->subject('Verify your email address');
        });

        Toastr::success('Vui lòng kiểm tra mail của bạn', 'Send to mail',["positionClass" => "toast-top-center", "progressBar" => true]);
        return redirect(route('login-shop.form'));
    }

    public function verify($code)
    {
        $user = User::where('activation_code', $code);

        if ($user->count() > 0) {
            $user->update([
                'active' => true,
                'activation_code' => null
            ]);
            $notification_status = 'Bạn đã xác nhận thành công';
            Toastr::success($notification_status,'Active success',["positionClass" => "toast-top-center", "progressBar" => true]);
        } else {
            $notification_status = 'Mã xác nhận không chính xác';
            Toastr::warning($notification_status,'Active success',["positionClass" => "toast-top-center", "progressBar" => true]);
        }

        return redirect()->route('login-shop.form');
    }
}
