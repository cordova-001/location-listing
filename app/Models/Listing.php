<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $table = 'listings'; 

    protected $fillable = [
            'listing_title',
            'category',
            'description',
            'tags',
            'address',
            'region', 
            'phone',
            'email',
            'website',
            'image',
            'video_url', 
            'facebook',
            'twitter',
            'youtube',
            'pinterest', 

    ];
}
