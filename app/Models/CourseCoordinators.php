<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCoordinators extends Model
{
    use HasFactory;
    protected $primaryKey = 'section_id';
	protected $fillable = ['course_code', 'course_coordinator', 'status'];
}
