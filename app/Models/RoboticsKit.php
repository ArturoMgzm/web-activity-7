<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoboticsKit extends Model
{

    public function course() { 
        return $this->belongsTo(Course::class); 
    }

    use HasFactory;
}
