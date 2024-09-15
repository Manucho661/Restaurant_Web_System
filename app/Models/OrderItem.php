<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable= [
        'order_id',
        'food_id',
        'quantity',
        'order_id'
        
    ];

    public function food():BelongsTo
    {

       return $this->belongsTo(Food::class, 'food_id');
    }
    
    public function orders():BelongsToMany
    {

      return  $this->belongsToMany(Order::class, 'user_id');
    }

}
