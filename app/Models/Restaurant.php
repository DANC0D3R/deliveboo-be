<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'address',
        'p_iva',
        'phone',
        'description',
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

    // Relazione tabella User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relazione tabella Types
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    // relazione con tabella Foods
    public function foods() {
        return $this->hasMany(Food::class);
    }
}
