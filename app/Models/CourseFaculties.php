<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseFaculties extends Model
{
    use HasFactory;
    protected $primaryKey = 'section_id';
	protected $fillable = ['course_code', 'section_no', 'course_faculty', 'status'];
}
