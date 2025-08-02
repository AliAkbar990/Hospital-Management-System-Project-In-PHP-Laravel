<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';

    protected $fillable = [
        'name', 
        'phone', 
        'email', 
        'speciality', 
        'doctorimage'
    ];
}
