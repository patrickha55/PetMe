<?php

use App\Supplier;
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
           
            [1,'Rachael Ray Nutrish','Rachel@gmail.com1','012345','012345','Rachel.com.vn','address','ward','district','city'],
            [2,'Rachael Ray Nutrish2','Rachel@gmail.com2','012345','012345','Rachel.com.vn','address','ward','district','city'],
            [3,'Rachael Ray Nutrish3','Rachel@gmail.com3','012345','012345','Rachel.com.vn','address','ward','district','city'],
            [4,'Rachael Ray Nutrish4','Rachel@gmail.com4','012345','012345','Rachel.com.vn','address','ward','district','city'],
          
         
        
           
         
        ];
        foreach ($products as $pr) {
           Supplier ::create([
                'id'=>$pr[0],  
                'name' => $pr[1],
                'email'=>$pr[2],
               
                'phone_1'=>$pr[3],
                'phone_2'=>$pr[4],
                'website'=>$pr[5],
                'address'=>$pr[6],
                'ward'=>$pr[7],
                'district'=>$pr[8],
                'city'=>$pr[9],
              
            
               
              
              
             

            ]);
        }
    }
}
