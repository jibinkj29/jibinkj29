<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = [
    'remember_token',
    ];

    public function marks()
    {
        return $this->hasMany(Mark::class,'student_id','id');
       
    }

}
