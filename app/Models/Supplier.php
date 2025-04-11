<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Supplier extends Model
{
    protected $fillable = 
    [
        'name',
        'country',
        'contact_number',
        'email',
        'website',
    ];

    public function products():BelongsToMany{

        return $this->belongsToMany(Product::class);
    }
}
