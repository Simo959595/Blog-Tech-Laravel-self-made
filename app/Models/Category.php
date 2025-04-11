<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = 
    [
        'name',
    ];

    public function products():HasMany{
        return $this->HasMany(Product::class);
    }

}
