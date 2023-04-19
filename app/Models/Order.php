<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // validazione back end
    protected $fillable = [ 
        'notes',
        'total_price',
        'client_name', 
        'client_address', 
        'client_phone',
        'client_email',
        
    ];
    public function foods() {
        return $this->belongsToMany(Food::class);
    }
}
