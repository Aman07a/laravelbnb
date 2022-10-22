<?php

namespace App\Models;

use App\Models\Bookable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['from', 'to'];

    public function bookable()
    {
        return $this->belongsTo(Bookable::class);
    }
}
