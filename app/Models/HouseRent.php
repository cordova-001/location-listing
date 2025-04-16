<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseRent extends Model
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
        'property_id',
        'numberOfRooms',
        'numberOfBath',
        'status',
        'user_id',
    ];
}
