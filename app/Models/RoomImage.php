<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RoomImage extends Model
{
    protected $fillable = [
        'room_id',
        'image',
    ];

    public function room()
    {
        return $this->BelongsTo(Room::class);
    }
}
