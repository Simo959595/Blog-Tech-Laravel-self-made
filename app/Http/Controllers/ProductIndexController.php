<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductIndexController;

class ProductIndexController extends Controller
{
    public function indexProduct(){
        return view('/product.index');
    }
}
