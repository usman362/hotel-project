<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;


    public function program_itinerary()
    {
        return $this->hasMany(ProgramItinerary::class, 'program_id');
    }

    public function program_addon()
    {
        return $this->hasMany(ProgramAddon::class, 'program_id');
    }


    public function program_costing()
    {
        return $this->hasMany(ProgramCosting::class, 'program_id');
    }

    public function program_discount()
    {
        return $this->hasMany(ProgramDiscount::class, 'program_id');
    }


    public function program_faq()
    {
        return $this->hasMany(ProgramFaq::class, 'program_id');
    }

    public function program_support()
    {
        return $this->hasMany(ProgramSupport::class, 'program_id');
    }


    public function program_unavailable()
    {
        return $this->hasMany(ProgramUnavailable::class, 'program_id');
    }

    public function activity()
    {
        return $this->hasOne(Activity::class, 'id','activity_id');
    }


    public function destination()
    {
        return $this->hasOne(Destination::class, 'id','destination_id');
    }


    public function region()
    {
        return $this->hasOne(Region::class, 'id','region_id');
    }


}
