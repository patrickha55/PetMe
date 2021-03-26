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
        $this->call(LaratrustSeeder::class);
        $this->call(ProductCategorySeeder::class);
<<<<<<< HEAD
=======
        $this->call(AnimalCategorySeeder::class);
        
>>>>>>> 350dec8b7391e08289a55316cef832d2ad5830ed
    }
}

