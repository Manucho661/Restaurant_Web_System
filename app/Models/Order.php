<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;
    protected $fillable= [
        'user_id'
        
        
    ];

    public function users():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');

    }

    public function food():BelongsToMany
    {
        return $this->belongsToMany(Food::class, 'order_items');

    }
    public function orderItems(): HasMany
    {
       return $this->hasMany(OrderItem::class);
    }
}
