<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    protected $fillable = [
        'name', 'email', 'age', 'weight', 'height', 'date', 'doctor', 'phone', 'message', 'status', 'user_id'
    ];
}
