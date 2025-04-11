<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{
    // funzione per mostrare vista del form
    public function formProduct(){
        return view('/product.form');
    }
    
    // funzione per mostrare vista della vetrina
    public function indexProduct(){
        return view('/product.index');
    }
}
