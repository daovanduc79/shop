<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->pet_id = 1;
        $category->name = 'Phu Quoc Dogs';
        $category->image = 'image.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 1;
        $category->name = 'Pull Dogs';
        $category->image = 'image.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 2;
        $category->name = 'England Cats';
        $category->image = 'image.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 2;
        $category->name = 'VietNam Cats';
        $category->image = 'image.jpg';
        $category->save();
    }
}
