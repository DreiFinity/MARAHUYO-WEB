<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = 'room_types'; // Explicitly set table name
    public $timestamps = false;
    
    protected $fillable = ['name'];

    protected $casts = [
        'created_at' => 'datetime'
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}