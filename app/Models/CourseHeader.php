<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseHeader extends Model
{
    use HasFactory;
    protected $table = 'course_headers';
    protected $fillable = [
        'course_header',
        'course_subheader',
    ];
}
