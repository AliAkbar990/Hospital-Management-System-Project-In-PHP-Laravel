<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected  $table = 'staff';
    protected  $fillable = ['name','phone','work'];
    
}
