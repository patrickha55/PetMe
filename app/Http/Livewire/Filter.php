<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use App\ProductCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Filter extends Component
{      public $minPrice=0 ; 
       public $maxPrice =10000000; 
    public $box1='';
    public $box12='';
    public $box123='';
    public $box1234='';
    public $box12345='';
    public $box123456='';
   

    public  $products ;
  
  public $test='';
   
  

  public function mount(Product $products){ 
   
 
   $this->products = Product::all();
  
  }

    
  

    public function render()
    {

      if($this->box1!= '' or  $this->box12!='' or $this->box123 !='' or $this->box1234 != '' or $this->box12345 !='' or $this->box123456 !='' or $this->box123456 !=''){
        $this->products = Product::whereBetween('price',[$this->minPrice,$this->maxPrice])->whereIn('product_category_id', [$this->box1,$this->box12,$this->box123,$this->box1234,$this->box12345,$this->box123456])->get();
    
        
       }else{
        $this->products = Product::whereBetween('price',[$this->minPrice,$this->maxPrice])->get();
       }
  
    return view('livewire.filter',['categories'=>ProductCategory::all(),'products'=>$this->products ]) ;

    
}
}
