<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentFactory> */
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'patient_email',
        'patient_phone',
        'appointment_date',
        'doctor_id',
        'status',

    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
