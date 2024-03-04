<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupCourses extends Model
{

    public function group() { 
        return $this->hasMany(Group::class); 
    } 

    public function course() { 
        return $this->hasMany(UseCourser::class); 
    } 

    use HasFactory;
}
