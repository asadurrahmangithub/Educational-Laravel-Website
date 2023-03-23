<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutHeader extends Model
{
    use HasFactory;
    protected $table = 'about_headers';
    protected $fillable = [
        'about_title',
        'about_subtitle',
        'about_description',

        'text_one',
        'text_second',
        'text_third',
        'text_four',
        'text_five',
    ];
}
