<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Food extends Model
{
    use HasFactory;

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function order():BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_items');

    }
}
