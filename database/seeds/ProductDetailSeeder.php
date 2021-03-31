<?php

use App\ProductDetail;
use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 // product_id  'origin', 'ingredients', 'materials','color', 'size' ,'instruction','note'
 $products = [
   
   //DogFood
    [1,'origin','Ingredient','materials','color','size','instruction'],
    [2,'origin','Ingredient','materials','color','size','instruction'],
    [3,'origin','Ingredient','materials','color','size','instruction'],
    [4,'origin','Ingredient','materials','color','size','instruction'],
    [5,'origin','Ingredient','materials','color','size','instruction'],
    [6,'origin','Ingredient','materials','color','size','instruction'],
    [7,'origin','Ingredient','materials','color','size','instruction'],
    [8,'origin','Ingredient','materials','color','size','instruction'],
    [9,'origin','Ingredient','materials','color','size','instruction'],
    [10,'origin','Ingredient','materials','color','size','instruction'],
   //Dog C//     [11,'origin','Ingredient','materials','color','size','instruction'],
    [12,'origin','Ingredient','materials','color','size','instruction'],
    [13,'origin','Ingredient','materials','color','size','instruction'],
    [14,'origin','Ingredient','materials','color','size','instruction'],
    [15,'origin','Ingredient','materials','color','size','instruction'],
    [16,'origin','Ingredient','materials','color','size','instruction'],
    [17,'origin','Ingredient','materials','color','size','instruction'],
    [18,'origin','Ingredient','materials','color','size','instruction'],
    [19,'origin','Ingredient','materials','color','size','instruction'],
    [20,'origin','Ingredient','materials','color','size','instruction'],
     //Dog T//     [21,'origin','Ingredient','materials','color','size','instruction'],
    [22,'origin','Ingredient','materials','color','size','instruction'],
    [23,'origin','Ingredient','materials','color','size','instruction'],
    [24,'origin','Ingredient','materials','color','size','instruction'],
    [25,'origin','Ingredient','materials','color','size','instruction'],
    [26,'origin','Ingredient','materials','color','size','instruction'],
    [27,'origin','Ingredient','materials','color','size','instruction'],
    [28,'origin','Ingredient','materials','color','size','instruction'],
    [29,'origin','Ingredient','materials','color','size','instruction'],
    [30,'origin','Ingredient','materials','color','size','instruction'],
  // Cat//     [31,'origin','Ingredient','materials','color','size','instruction'],
    [32,'origin','Ingredient','materials','color','size','instruction'],
    [33,'origin','Ingredient','materials','color','size','instruction'],
    [34,'origin','Ingredient','materials','color','size','instruction'],
    [35,'origin','Ingredient','materials','color','size','instruction'],
    [36,'origin','Ingredient','materials','color','size','instruction'],
    [37,'origin','Ingredient','materials','color','size','instruction'],
    [38,'origin','Ingredient','materials','color','size','instruction'],
    [39,'origin','Ingredient','materials','color','size','instruction'],
    [40,'origin','Ingredient','materials','color','size','instruction'],
   // Cat//     [41,'origin','Ingredient','materials','color','size','instruction'],
    [42,'origin','Ingredient','materials','color','size','instruction'],
    [43,'origin','Ingredient','materials','color','size','instruction'],
    [44,'origin','Ingredient','materials','color','size','instruction'],
    [45,'origin','Ingredient','materials','color','size','instruction'],
    [46,'origin','Ingredient','materials','color','size','instruction'],
    [47,'origin','Ingredient','materials','color','size','instruction'],
    [48,'origin','Ingredient','materials','color','size','instruction'],
    [49,'origin','Ingredient','materials','color','size','instruction'],
    [50,'origin','Ingredient','materials','color','size','instruction'],
     //Cat Furni//     [51,'origin','Ingredient','materials','color','size','instruction'],
    [52,'origin','Ingredient','materials','color','size','instruction'],
    [53,'origin','Ingredient','materials','color','size','instruction'],
    [54,'origin','Ingredient','materials','color','size','instruction'],
    [55,'origin','Ingredient','materials','color','size','instruction'],
    [56,'origin','Ingredient','materials','color','size','instruction'],
    [57,'origin','Ingredient','materials','color','size','instruction'],
    [58,'origin','Ingredient','materials','color','size','instruction'],
    [59,'origin','Ingredient','materials','color','size','instruction'],
 ];
    
    

    
    
    
    


   


 

foreach ($products as $pr) {
    ProductDetail::create([
        'product_id' => $pr[0],
        'origin' => $pr[1],
        'ingredients' => $pr[2],
        'materials' => $pr[3],
        'color' => $pr[4],
        'size' => $pr[5],
        'instruction' => $pr[6],
        
    ]);
}
 


// 
     
           
         
   
    }
}
