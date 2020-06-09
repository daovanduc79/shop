<?php


namespace App\Http\Repository;


use App\Category;
use App\Pet;

class SearchRepository
{
    function searchPet($keyword) {
        $pet = new Pet();
        return $pet->where('name','like','%'.$keyword.'%')->get();
    }

    function searchCategory($keyword) {
        $pet = new Category();
        return $pet->where('name','like','%'.$keyword.'%')->get();
    }
}
