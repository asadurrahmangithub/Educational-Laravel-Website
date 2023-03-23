<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogHeader extends Model
{
    use HasFactory;
    protected $table = 'blog_headers';
    protected $fillable = [
        'blog_header',
        'blog_subheader',
    ];
}
