<?php

use App\ProductSupplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       // id 'name', 'email', 'phone1','phone2', 'website' ,'address','ward','district','city'
        $products = [
            // , Animal , Name , status 
            [1,'Whiska','Whiska11@gmail.com',0123456,099111,'whiska1.com.vn','2251 ','Vo Van Kiet','Thu Duc1','Ho Chi Mnh1'],
            [2,'Whiska1','Whiska@2gmail.com',0123456,099111,'whiska.c2om.vn','225 ',2'Vo Van Kiet','Thu Duc','H2o Chi Minh'],
            [3,'Whiska2','Whiska3@gmail.com',0123456,099111,'whiska.c3om.vn','225 ','3Vo Van Kiet','Thu Duc','Ho 3Chi Minh'],
            [4,'Whiska3','Whiska4@gmail.com',0123456,099111,'whiska.co4m.vn','225 ','Vo4 Van Kiet','Thu Duc','Ho Chi4 Minh'],
            [5,'Whiska4','Whiska5@gmail.com',0123456,099111,'whiska.com5.vn','225 ','Vo V5an Kiet','Thu Duc','Ho Chi Minhh'],
            [6,'Whiska5','Whiska6@gmail.com',0123456,099111,'whiska.com.6vn','225 ','Vo Van6 Kiet','Thu Duc','Ho Chi Mnh'],
            [7,'Whiska6','Whiska7@gmail.com',0123456,099111,'whiska.com.v7n','225 ','Vo Van K7iet','Thu Duc','Ho Chi Minh'],
            [8,'Whiska7','Whiska8@gmail.com',0123456,099111,'whiska.com.vn8','225 ','Vo Van Kie8t','Thu Duc','Ho Chi Minh2'],
         
        
           
         
        ];
        foreach ($products as $pr) {
            ProductSupplier::create([
                'id'=>$pr[0],
                'name' => $pr[1],
                'email' => $pr[2],
                'phone1' => $pr[3],
                'phone2' => $pr[4],
                'website' => $pr[5],
                'address' => $pr[6],
                'ward' => $pr[7],
                'district' => $pr[8],
                'city' => $pr[9],

            ]);
        }
    }
}
