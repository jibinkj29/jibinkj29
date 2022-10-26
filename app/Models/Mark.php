<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCreateddateAttribute()
    {
      
      return date('M j, Y h:i A',strtotime($this->created_at));
    }

    public function student()
{
      return $this->belongsTo(Student::class,'student_id','id');
}
    protected $appends = ['Createddate'];

}
