<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorHeader extends Model
{
    use HasFactory;
    protected $table = 'instructor_headers';
    protected $fillable = [
        'instructor_header',
        'instructor_subheader',
    ];
}
