<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bookable extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
