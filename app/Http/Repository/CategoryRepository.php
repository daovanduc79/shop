<?php


namespace App\Http\Repository;


use App\Category;
use App\Pet;

class CategoryRepository extends Repository
{
    public function __construct(Category $category)
    {
        parent::__construct($category);
    }

}
