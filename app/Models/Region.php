<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;


    public function destination()
    {
        return $this->hasOne(Destination::class, 'id', 'destination_id');
    }

    public function icon_image()
    {
        return $this->hasOne(Upload::class, 'id', 'icon');
    }

    public function thumbnail()
    {
        return $this->hasOne(Upload::class, 'id', 'thumbnail_image');
    }

    public function banner()
    {
        return $this->hasOne(Upload::class, 'id', 'banner_image');
    }
}
