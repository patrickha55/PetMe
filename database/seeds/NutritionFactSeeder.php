<?php

use App\NutritionFact;
use Illuminate\Database\Seeder;

class NutritionFactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 'serving_size',
        // 'calories',
        // 'protein',
        // 'fat_content',
        // 'total_carbohydrate',
        // 'sugar','crude_ash',
        // 'crude_fiber',
        // 'calcium',
        // 'vitamin_A',
        // 'moisture',
        // 'product_detail_id',  
        
        $products = [
            //Animal
        // id   name   status 
         
        ['140','300','1200','120','1200','500','1200','300','233','1'],
        ['140','300','1200','120','1200','500','1200','300','233','2'],
        ['140','300','1200','120','1200','500','1200','300','233','3'],
        ['140','300','1200','120','1200','500','1200','300','233','4'],
        ['140','300','1200','120','1200','500','1200','300','233','5'],
        ['140','300','1200','120','1200','500','1200','300','233','6'],
        
        
         
        ];
        foreach ($products as $pr) {
            NutritionFact::create([
               'serving_size'=>$pr[0],
                'calories' => $pr[1],
                'protein' => $pr[2],
                'fat_content' => $pr[3],
                'total_carbohydrate' => $pr[4],
                'sugar' => $pr[5],
                'crude_ash' => $pr[6],
                'calcium' => $pr[7],
                'moisture' => $pr[8],
                'product_detail_id' => $pr[9],
              
            ]);
        }
    }
}
