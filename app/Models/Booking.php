<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'room_id', 
        'first_name',
        'last_name',
        'email',
        'country',
        'phone_code',
        'phone_number',
        'checkin',
        'checkout',
        'guests',
        'total_cost',
        'status'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}