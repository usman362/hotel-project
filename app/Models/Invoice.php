<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
       'invoice_no',
       'date',
       'due_date',
       'invoice_to',
       'total_due',
       'bank_name',
       'country',
       'iban',
       'swift_code',
       'sales_person',
       'note',
       'payment_type',
       'payment_terms',
       'client_notes',
       'payment_sub',
    ];

    public function payments()
    {
        return $this->hasMany(InvoicePayment::class, 'id', 'invoice_id');
    }


    public function customer()
    {
        return $this->hasOne(Customer::class, 'id', 'invoice_to');
    }
}
