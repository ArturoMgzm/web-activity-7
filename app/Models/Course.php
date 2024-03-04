<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    public function roboticsKit() { 
        return $this->hasMany(RoboticsKit::class); 
      }

    public function groupCourses() { 
        return $this->belongsTo(GroupCourses::class); 
    }

    use HasFactory;
}
