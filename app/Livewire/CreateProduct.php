<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Supplier;
use App\Livewire\CreateProduct;
use Illuminate\Support\Facades\Auth;

class CreateProduct extends Component
{
    public $category_id;
    public $name;
    public $type;
    public $price;
    public $year;
    public $supplier_id;


    public function productCreate(){
        $products = Auth::user()->products()->create(
            [
                'category_id'=>$this->category_id,
                'name'=>$this->name,
                'type'=>$this->type,
                'price'=>$this->price,
                'year'=>$this->year,
            ]
            );

        $products->suppliers()->attach($this->supplier_id);

        $this->cleanForm();
    }


    protected function cleanForm(){
            $this ->name = '';
            $this ->type = '';
            $this ->price = '';
            $this ->year = '';
    }


    public function render()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('livewire.create-product', compact('categories', 'suppliers'));
    }
}
