<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'phone',
        'email',
        'user_id',
        'message',
        'listing_id',
    ];
}
