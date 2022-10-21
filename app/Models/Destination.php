<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    public function thumbnail()
    {
        return $this->hasOne(Upload::class, 'id', 'thumbnail_image');
    }

    public function banner()
    {
        return $this->hasOne(Upload::class, 'id', 'banner_image');
    }

    public function programs(){
        return $this->hasMany(Program::class,'destination_id','id');
    }
}
