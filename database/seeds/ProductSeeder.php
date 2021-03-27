<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert(array (
            0 => 
            array (
                'pro_cat_id' => 1,
               
                
                'name' => 'Food 1',
                'description' => 'descrip 1 ',
                'price' => 1000,
                'stock' => 100,
                'img' => 'product1.png',
                'created_at' => '2020-03-07 15:10:58',
                'updated_at' => '2020-03-07 15:10:58',
            ),
            1 => 
            array (
                'pro_cat_id' => 1,
               
                
                'name' => 'Food 2',
                'description' => 'descrip 2 ',
                'price' => 1000,
                'stock' => 100,
                'img' => 'product2.png',
                'created_at' => '2020-03-07 15:10:58',
                'updated_at' => '2020-03-07 15:10:58',
            ),
            2 => 
            array (
                'pro_cat_id' => 1,
               
                
                'name' => 'Food 3',
                'description' => 'descrip 3 ',
                'price' => 1000,
                'stock' => 200,
                'img' => 'product3.png',
                'created_at' => '2020-03-07 15:10:58',
                'updated_at' => '2020-03-07 15:10:58',
            ),
            
           
        ));
    }
}
