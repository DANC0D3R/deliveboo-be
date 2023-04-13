<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'address',
        'p_iva',
        'phone',
        'description',
        'img',
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
