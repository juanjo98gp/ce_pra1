<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleLine extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale',
        'product',
        'product_name',
        'quantity',
        'unit_price',
        'product_image',
    ];
}
