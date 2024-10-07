<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
        'booking_id',
        'amount_paid',
        'payment_status',
    ];
}
