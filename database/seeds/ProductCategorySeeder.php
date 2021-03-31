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
            //id , Animal , Name , status 
        // Product Category  
       
        //Dog
            [1,1,'Dog Food',1], 
            [2,1,'Clothes and Accessories ',1], 
            [3,1,'Toy',1],
           
         //Cat
            [4,2,' Cat Food',1],
            [5,2,'Cat Litter',1],
            [6,2,'Cat Furniture And Scratchers',1],
           
         
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
