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
        $user->username = 'admin@gmail.com';
        $user->password = Hash::make('123456');
<<<<<<< HEAD
        $user->active = '1';
=======
        $user->active = true;
>>>>>>> c135ee81ad6674f9c7d04bb10dede9d74bc7e98a
        $user->save();
    }
}
