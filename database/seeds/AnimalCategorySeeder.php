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
<<<<<<< HEAD
        $products = [
            //Animal
        // id   name   status 
            [1, 'Dog',  1],
            [2, 'Cat',  1],
        
         
        ];
        foreach ($products as $pr) {
            AnimalCategory::create([
               'id'=>$pr[0],
                'name' => $pr[1],
                'status' => $pr[2],
              
            ]);
        }
=======
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
>>>>>>> main
    }
}
