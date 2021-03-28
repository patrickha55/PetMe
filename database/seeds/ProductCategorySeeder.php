<?php

use App\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1 :dog 2:Cat
        $products = [
            // , Animal , Name , status 
            [1,1,'DryFood',1],
            [2,1,'WetFood',1],
            [3,1,'Toy',1],
            [4,1,'Cleansing',1],
            [5,2,'Food',1],
            [6,1,'DryFood',1],
          
        
           
         
        ];
        foreach ($products as $pr) {
            ProductCategory::create([
                'id'=>$pr[0],
                'animal_category_id' => $pr[1],
                'name' => $pr[2],
                'status' => $pr[3],

            ]);
        }


    }
}
