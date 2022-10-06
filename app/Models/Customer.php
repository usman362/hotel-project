<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'contact',
        'country'
    ];


    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'invoice_to', 'id');
    }
}
