<?php


namespace App\Http\Repository;


use App\Pet;

class SearchRepository
{
    function searchPet($keyword) {
        $pet = new Pet();
        return $pet->where('name','like','%'.$keyword.'%')->get();
    }
}
