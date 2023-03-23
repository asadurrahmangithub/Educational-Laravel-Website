<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseHeaderSection extends Model
{
    use HasFactory;
    protected $table = 'course_header_sections';
    protected $fillable = [
        'course_header',
        'course_subheader',
    ];
}
