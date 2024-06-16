<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_category',
        'product_price',
        'product_image',
        'product_description',
        'product_created',
        'product_updated',
    ];

    protected $table = 'products';

}
