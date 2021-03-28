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
            [1,'Whiska','Whiska11@gmail.com','0123456','099111','whiska1.com.vn','2251 ','Vo Van Kiet','Thu Duc1','Ho Chi Mnh1'],
        
           
         
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
