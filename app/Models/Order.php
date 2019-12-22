<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'product_id', 'date', 'attributes',
        'color_id', 'size_id', 'details'
    ];
}
