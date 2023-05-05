<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = "foods";

    protected $fillable = [
        'restaurant_id',
        'name',
        'description',
        'price',
        'availability',
        'vegetarian',
        'vegan',
        'glutenfree',
        'img',
    ];

    protected $appends = [
        'full_img_path',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     *
    */

    public function getFullImgPathAttribute()
    {
        $fullPath = null;

        if ($this->img) {
            $fullPath = asset('storage/'.$this->img);
        }

        return $fullPath;
    }

    // relazione con tabella Restaurants
    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }
    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
