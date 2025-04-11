<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Livewire\IndexProduct;


class IndexProduct extends Component
{
    public $name;
    public $type;
    public $price;
    public $year;             
    
    public function render()
     {
        $products = Product::all();
        return view('livewire.index-product', compact('products'));
    }
}
