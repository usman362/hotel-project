<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function avatar()
    {
        return $this->hasOne(User::class, 'id', 'avatar_image');
    }

}


