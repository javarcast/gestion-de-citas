<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppoimentTreatments extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'treatment_id',
        'appointment_id'
    ];
}
