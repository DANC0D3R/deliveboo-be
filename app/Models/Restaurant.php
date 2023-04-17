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
