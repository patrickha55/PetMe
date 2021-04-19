<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use App\ProductCategory;

class Filter extends Component
{      public $minPrice=0 ; 
       public $maxPrice =10000000; 
    public $box1='';
    public $box12='';
    public $box123='';
    public $box1234='';
    public $box12345='';
    public $box123456='';
  


    public function selectedProduct(){
        $products = Product::query();
    }
  

    public function render()
    { 
      
        return view('livewire.filter',['categories'=>ProductCategory::all(),'products'=>Product::whereBetween('price',[$this->minPrice,$this->maxPrice])->paginate(15) ]) ;
      
        
    }
}
