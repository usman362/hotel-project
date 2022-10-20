<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->hasOne(Upload::class, 'id', 'header_image');
    }


}
