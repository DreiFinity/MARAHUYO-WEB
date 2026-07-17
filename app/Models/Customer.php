<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone',
        'birth_date',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'travel_frequency',
        'travel_purpose',
        'preferences',
        'membership_type',
        'membership_price',
        'membership_start',
        'membership_end',
        'newsletter',
        'profile_picture',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
