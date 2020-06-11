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
        $category->pet_id = 6;
        $category->name = 'Alaska';
        $category->image = 'image1.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 6;
        $category->name = 'Husky';
        $category->image = 'image2.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 6;
        $category->name = 'Samoyed';
        $category->image = 'image3.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 6;
        $category->name = 'Pitbull';
        $category->image = 'image4.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 6;
        $category->name = 'Corgi';
        $category->image = 'image5.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 6;
        $category->name = 'Poodle';
        $category->image = 'image6.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 6;
        $category->name = 'Akita Inu';
        $category->image = 'image7.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 6;
        $category->name = 'Retriever';
        $category->image = 'image8.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 7;
        $category->name = 'Mèo xiêm';
        $category->image = 'image9.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 7;
        $category->name = 'Mèo Anh lông dài ';
        $category->image = 'image10.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 7;
        $category->name = 'Mèo Anh lông ngắn';
        $category->image = 'image11.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 7;
        $category->name = 'Mèo Ba Tư';
        $category->image = 'image12.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 7;
        $category->name = 'Mèo tai cụp';
        $category->image = 'image13.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 7;
        $category->name = 'Mèo chân ngắn';
        $category->image = 'image14.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 7;
        $category->name = 'Mèo Sphynx';
        $category->image = 'image15.jpg';
        $category->save();

        $category = new Category();
        $category->pet_id = 7;
        $category->name = 'Mèo Chinchilla';
        $category->image = 'image16.jpg';
        $category->save();
    }
}
