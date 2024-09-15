<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryDetail extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable= [
        'order_id',
        'user_id',
        'city',
        'zip',
        'address',
        
    ];
}
