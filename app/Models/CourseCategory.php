<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;
    protected $table = 'course_categories';
    protected $fillable = [
        'course_title',
        'course_subtitle',
        'category_img',
        'white_category_img'
    ];
}
