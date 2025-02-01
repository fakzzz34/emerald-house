<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'boarding_house_id',
        'photo',
        'content',
        'rating',
    ];

    public function boardingHouse()
    {
        $this->belongsTo(BoardingHouse::class);
    }
}
