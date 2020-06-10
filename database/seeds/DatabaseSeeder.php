<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
         $this->call(UserSeeder::class);
         $this->call(PetSeeder::class);
         $this->call(CategorySeeder::class);
=======
//         $this->call(UserSeeder::class);
//         $this->call(ProductTableSeeder::class);
           $this->call(PostTableSeeder::class);
>>>>>>> a0c264564779214e1090821830a51457a2137b76
    }
}
