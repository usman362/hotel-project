<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;


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
