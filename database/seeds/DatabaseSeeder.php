<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
<<<<<<< HEAD
       $this->call(LaratrustSeeder::class);
       $this->call(UserSeeder::class);
       $this->call(AnimalCategorySeeder::class);
         $this->call(SupplierSeeder::class);
         $this->call(ProductCategorySeeder::class);
         $this->call(ProductSeeder::class);
        $this->call(ProductDetailSeeder::class);
         $this->call(NutritionFactSeeder::class);
     
=======
        $this->call(LaratrustSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AnimalCategorySeeder::class);
          $this->call(SupplierSeeder::class);
          $this->call(ProductCategorySeeder::class);
          $this->call(ProductSeeder::class);
         $this->call(ProductDetailSeeder::class);
>>>>>>> main
      
      
  
 
     
        
    }
}

