<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContents extends Model
{
    use HasFactory;
    protected $primaryKey = 'content_id';
	protected $fillable = ['course_code', 'section_no', 'content_type', 'content_details', 'status'];
}
