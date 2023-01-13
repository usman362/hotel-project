<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tour()
    {
        return $this->hasOne(Program::class, 'id', 'tour_id');
    }
}
