<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Delivery extends Model
{
    protected $fillable = [
        'product_id', 'date', 'attributes',
        'color_id', 'size_id', 'details'
    ];
}
