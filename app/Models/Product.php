<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $fillable = 
    [
        'user_id',
        'category_id',
        'name',
        'type',
        'price',
        'year',   
    ];

    public function categories():BelongsTo{
        return $this->belongsTo(Category::class);
    }
    
    public function users():BelongsTo{
        return $this->belongsTo(User::class);
    }
    
    public function suppliers():BelongsToMany{
        return $this->belongsToMany(Supplier::class);
    }

}
