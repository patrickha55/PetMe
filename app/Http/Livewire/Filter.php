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
  
  public function checked(){ 
if($this->box1!= '' or  $this->box12!='' or $this->box123 !='' or $this->box1234 != '' or $this->box12345 !='' or $this->box123456 !=''){
  $this->products = Product::whereBetween('price',[$this->minPrice,$this->maxPrice])->whereIn('product_category_id', [$this->box1,$this->box12,$this->box123,$this->box1234,$this->box12345,$this->box123456])->get();
//  $this->products = Product::all()->where('product_category_id',$this->box1)->orWhere('product_category_id',$this->box12);
}else{
$this->products = Product::all() ;
}


  
 
  }
    
  

    public function render()
    {
     // $this->products = Product::all()->where('product_category_id',1);
  
  //  $this->products = Product::whereBetween('price',[$this->minPrice,$this->maxPrice])->whereIn('product_category_id', ['1', 2])->get();
    return view('livewire.filter',['categories'=>ProductCategory::all(),'products'=>$this->products ]) ;
//return view('livewire.filter',['categories'=>ProductCategory::all(),'products'=>::whereBetween('price',[$this->minPrice,$this->maxPrice])-> paginate(15) ]) ;
//filter price
// return view('livewire.filter',['categories'=>ProductCategory::all(),'products'=>Product::whereBetween('price',[$this->minPrice,$this->maxPrice])->where('product_category_id',$this->box1)->orWhere('product_category_id',$this->box12)->orWhere('product_category_id',$this->box123)->orwhere('product_category_id',$this->box1234)->orWhere('product_category_id',$this->box12345)->orWhere('product_category_id',$this->box123456)->get()]) ;   
// main  return view('livewire.filter',['categories'=>ProductCategory::all(),'products'=>Product::whereBetween('price',[$this->minPrice,$this->maxPrice])->where('product_category_id',$this->box1)->orWhere('product_category_id',$this->box12)->orWhere('product_category_id',$this->box123)->orwhere('product_category_id',$this->box1234)->orWhere('product_category_id',$this->box12345)->orWhere('product_category_id',$this->box123456)->get()]) ;   
 //return view('livewire.filter',['categories'=>ProductCategory::all(),'products'=>Product::paginate(5)]) ;   
// return view('livewire.filter',['categories'=>ProductCategory::all(),'products'=>Product::where('product_category_id',$this->box1)->orWhere('product_category_id',$this->box12)->orWhere('product_category_id',$this->box123)->orWhere('product_category_id',$this->box1234)->orWhere('product_category_id',$this->box12345)->orWhere('product_category_id',$this->box123456)->WhereBetween('price',[$this->minPrice,$this->maxPrice])->get()]) ;    
//filter by price and Category Id
//  return view('livewire.filter',['categories'=>ProductCategory::all(),'products'=>Product::WhereBetween('price',[$this->minPrice,$this->maxPrice])->where('product_category_id',$this->box1)
//  ->orWhereBetween('price',[$this->minPrice,$this->maxPrice])->Where('product_category_id',$this->box12)
//  ->orWhereBetween('price',[$this->minPrice,$this->maxPrice])->Where('product_category_id',$this->box123)
//  ->orWhereBetween('price',[$this->minPrice,$this->maxPrice])->Where('product_category_id',$this->box1234)
//  ->orWhereBetween('price',[$this->minPrice,$this->maxPrice])->Where('product_category_id',$this->box12345)
//  ->orWhereBetween('price',[$this->minPrice,$this->maxPrice])->Where('product_category_id',$this->box123456)->get()]) ; 
//--
//->orWhere('product_category_id',$this->box123)->orWhere('product_category_id',$this->box1234)->orWhere('product_category_id',$this->box12345)->orWhere('product_category_id',$this->box123456)->get()]) ;    
    
}
}
