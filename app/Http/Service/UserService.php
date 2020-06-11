<?php


namespace App\Http\Service;


use App\Http\Repository\UserRepository;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserService extends Service
{
   public function __construct(UserRepository $userRepository)
   {
       parent::__construct($userRepository);
   }

   public function create()
   {
       return $this->repository->create();
   }

   public function store($user,$request)
   {

       $user->name = $request->name;
       $user->username = $request->email;
       $user->role = $request->role;

       if ($request->password == $request->password_confirmation) {
           $user->password = Hash::make($request->password);
       }

       $user->birthday = $request->birthday;
       $user->phone = $request->phone;
       $user->address = $request->address;

       if ($request->hasFile('inputFile')) {
           $file = $request->inputFile;
           $path = $file->store('images', 'public');
           $user->image = $path;
       } else {
           $user->image = 'images/default.png';
       }

       return $this->repository->save($user);
   }

   public function update($user, $request)
   {
       $user->name = $request->name;
       $user->role = $request->role;
       $user->birthday = $request->birthday;
       $user->phone = $request->phone;
       $user->address = $request->address;

       if ($request->hasFile('inputFile')) {
           $file = $request->inputFile;
           $path = $file->store('images', 'public');
           $user->image = $path;
       } else {
           $user->image = 'images/default.png';
       }

       return $this->repository->save($user);
   }

   public function search($keyword)
   {
       return $this->repository->search($keyword);
   }
}
