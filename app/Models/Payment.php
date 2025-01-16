<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    public function scopePaymentMethods($query)
    {
        return $query->select('payment_method')
                    ->distinct()
                    ->get()
                    ->pluck('payment_method');
    }
}
