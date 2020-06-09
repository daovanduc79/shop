<?php


namespace App\Http\Service;


use App\Category;
use App\Http\Repository\CategoryRepository;
use App\Pet;

class CategoryService extends Service
{
    public function __construct(CategoryRepository $categoryRepository)
    {
        parent::__construct($categoryRepository);
    }

    function store($categoryRequest)
    {
        $name = $categoryRequest->name;
        $pet_id = $categoryRequest->pet_id;
        $image = $categoryRequest->image->store('images', 'public');

        $category = new Category();
        $category->name = $name;
        $category->pet_id = $pet_id;
        $category->image = $image;

        $this->save($category);
    }

    function update($id, $categoryRequest)
    {
        $name = $categoryRequest->name;
        $pet_id = $categoryRequest->pet_id;
        $image = $categoryRequest->image->store('images', 'public');

        $category = $this->findOrFail($id);
        $category->name = $name;
        $category->pet_id = $pet_id;
        $category->image = $image;

        $this->save($category);
    }
}
