<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $primaryKey = 'student_id';
	protected $fillable = ['student_name', 'course_code', 'section_no', 'status'];
}
