<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        // 'avaliability',
        'vegetarian',
        'vegan',
        'img',
    ];

    // public function restaurants()
    // {
    //     return $this->belongsToMany(Restaurant::class);
    // }
}
