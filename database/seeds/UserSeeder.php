<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'admin';
        $user->role = '1';
        $user->username = 'admin@gmail.com';
        $user->password = Hash::make('123456');
        $user->active = true;
        $user->save();

        $user = new User();
        $user->name = 'hai';
        $user->role = '2';
        $user->username = 'hai@gmail.com';
        $user->password = Hash::make('123456');
        $user->active = true;
        $user->save();

        $user = new User();
        $user->name = 'hang';
        $user->role = '3';
        $user->username = 'hang@gmail.com';
        $user->password = Hash::make('123456');
        $user->active = true;
        $user->save();
    }
}
