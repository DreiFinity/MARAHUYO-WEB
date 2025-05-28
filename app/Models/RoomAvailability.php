<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomAvailability extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'room_id',
        'date',
        'is_available'
    ];

    protected $casts = [
        'date' => 'date',
        'is_available' => 'boolean',
        'created_at' => 'datetime'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}