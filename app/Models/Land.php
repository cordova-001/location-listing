<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;

    protected $fillable = [

    'listing_title',
    'description',
    'price',
    'category',
    'address',
    'state',
    'country',
    'dimension',
    'documents',
    'property_id',
    'numbers_available',
    'status',
    'user_id',
    ];
}
