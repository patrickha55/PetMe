<?php

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
        \DB::table('animal_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
               
                
                'name' => 'Cat',
                'status' => '1',
                'created_at' => '2020-03-07 15:10:58',
                'updated_at' => '2020-03-07 15:10:58',
            ),
            1 => 
            array (
                'id' => 2,
         
             
                'name' => 'Dog',
                'status' => 1,
                'created_at' => '2020-03-07 15:11:36',
                'updated_at' => '2020-03-07 15:11:36',
            ),
            2 => 
            array (
                'id' => 3,
             
              
                'name' => 'Dragon',
                'status' => 1,
                'created_at' => '2020-03-07 15:11:36',
                'updated_at' => '2020-03-07 15:11:36',
               
            ),
        ));    
    }
}
