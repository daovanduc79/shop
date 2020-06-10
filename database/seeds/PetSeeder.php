<?php

use App\Pet;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pet = new Pet();
        $pet->name = 'Dogs';
        $pet->image = 'image1.jpg';
        $pet->save();

        $pet = new Pet();
        $pet->name = 'Cats';
        $pet->image = 'image2.jpg';
        $pet->save();

    }
}
