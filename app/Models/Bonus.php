<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bonus extends Model
{
    protected $fillable = [
        'boarding_house_id',
        'image',
        'name',
        'description',
    ];

    public function boardingHouse()
    {
        $this->belongsTo(BoardingHouse::class);
    }
}
