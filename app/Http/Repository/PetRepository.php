<?php


namespace App\Http\Repository;


use App\Pet;

class PetRepository extends Repository
{
    public function __construct(Pet $pet)
    {
        parent::__construct($pet);
    }

}
