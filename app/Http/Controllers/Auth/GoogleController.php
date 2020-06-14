<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RoleConstant;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $finduser = User::where('google_id', $user->id)->first();

        if ($finduser) {
            Auth::login($finduser);
            return redirect()->route('shop.index');

        } else {
            $newUser = new User();
            $newUser->name = $user->name;
            $newUser->username = $user->email;
            $newUser->image = $user->avatar;
            $newUser->google_id = $user->id;
            $newUser->password = Hash::make('123456');
            $newUser->role = RoleConstant::MEMBER;
            $newUser->active = true;
            $newUser->save();

            Auth::login($newUser);
            return redirect()->route('shop.index');
        }
    }
}
