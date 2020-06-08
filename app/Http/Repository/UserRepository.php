<?php


namespace App\Http\Repository;


use App\User;

class UserRepository extends Repository
{

    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function create()
    {
        return new User();
    }
}
