<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function avatar_image()
    {
        return $this->hasOne(Upload::class, 'id', 'avatar');
    }

    public function tour(){
        return $this->belongsTo(Program::class);
    }

}


