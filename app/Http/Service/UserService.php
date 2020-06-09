<?php


namespace App\Http\Service;


use App\Http\Repository\UserRepository;

class UserService extends Service
{
   public function __construct(UserRepository $userRepository)
   {
       parent::__construct($userRepository);
   }


}
