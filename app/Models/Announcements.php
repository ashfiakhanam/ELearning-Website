<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
    use HasFactory;
    protected $primaryKey = 'announcement_id';
	protected $fillable = ['date', 'announcement'];
}
