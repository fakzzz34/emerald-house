<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'code',
        'boarding_house_id',
        'room_id',
        'name',
        'email',
        'phone_number',
        'payment_method',
        'payment_status',
        'duration',
        'total_amount',
        'transaction_date',
    ];

    public function boardingHouse()
    {
        $this->belongsTo(BoardingHouse::class);
    }
    public function room()
    {
        $this->belongsTo(Room::class);
    }
}
