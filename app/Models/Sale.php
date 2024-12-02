<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'name',
        'address',
        'base_cache',
        'tax_cache',
        'total_cache',
        'user_type',
    ];
}
