<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cartItem extends Model
{
    use HasFactory;
    protected $fillable= [
        'cart_id',
        'food_id',
        'price',
        'quantity',
        
    ];


    public function cart()
    {
        return $this->belongsTo(Cart::class); 

    }

    public function food()
    {
        return $this->belongsTo(Food::class); 

    }
}
