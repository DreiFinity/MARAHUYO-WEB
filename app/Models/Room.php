<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'room_number',
        'room_type_id',
        'capacity',
        'price_per_night',
        'description',
        'image_path',
        'is_available'
    ];

    protected $casts = [
        'is_available' => 'boolean',
        'created_at' => 'datetime'
    ];

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function availabilities()
    {
        return $this->hasMany(RoomAvailability::class);
    }
}