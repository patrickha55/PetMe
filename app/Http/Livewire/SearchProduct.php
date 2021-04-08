<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Product;

class SearchProduct extends Component
{
    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.search-product', [
            'product' => Product::where('name', 'like', '%'.$this->search.'%')->paginate(5),
        ]);
    }
      
     
}
