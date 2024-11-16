<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product_product';

    protected $fillable = [
        'name',
        'writer',
        'brand',
        'isbn',
        'publication_year',
        'pages',
        'category',
        'thumbnail_image',
        'front_image',
        'description',
        'price'
    ];
}
