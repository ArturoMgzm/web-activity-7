<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public function group() { 
        return $this->belongsTo(Group::class); 
    }

    use HasFactory;
}