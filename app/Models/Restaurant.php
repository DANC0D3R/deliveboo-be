<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'name',
        'slug',
        'address',
        'p_iva',
        'phone',
        'description',
        'img',
    ];

    // Relazione tabella User
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // Relazione tabella Type
    public function type()
    {
        return $this->belongsToMany(Type::class);
    }
}
