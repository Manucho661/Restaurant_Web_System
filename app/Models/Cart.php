<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    public function food()
    {
        return $this->belongsToMany(Food::class, 'cartItem')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }

    public function items()
    {
        return $this->hasMany(CartItem::class); 

    }

}
