<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_table',
        'order_note',
        'order_status',
        'order_total',
    ];

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
    
}
