<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function showFormRegister()
    {
        return view('login.register');
    }

    public function registerActive(Request $request)
    {
        $activation_code = time() . uniqid(true);
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->email;
        $user->password = Hash::make($request->password);
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

        return redirect(route('formLogin'))->with('status', 'Vui lòng xác nhận tài khoản email');
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
        } else {
            $notification_status = 'Mã xác nhận không chính xác';
        }
        session()->flash('status', $notification_status);
        return redirect()->route('formLogin');
    }
}
