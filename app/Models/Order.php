<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // validazione back end
    protected $fillable = [ 
        'total_price',
        'client_name', 
        'client_surname', 
        'client_address', 
        'client_phone',
        'client_email',
        'notes'
    ];
    
    public function foods() {
        return $this->belongsToMany(Food::class);
    }
}
