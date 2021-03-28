<?php

use App\AnimalCategory;
use Illuminate\Database\Seeder;

class AnimalCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [1,'Dog', 1],
            [2,'Cat', 1],
        
         
        ];
        foreach ($products as $pr) {
            AnimalCategory::create([
               'id'=>$pr[0],
                'name' => $pr[1],
                'status' => $pr[2],
              
            ]);
        }
    }
}
