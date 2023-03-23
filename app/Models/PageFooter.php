<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageFooter extends Model
{
    use HasFactory;
    protected $table = 'page_footers';
    protected $fillable = [
        'address',
        'number',
        'email',

        'description',
        'image',

        'facebook',
        'instagram',
        'linkedin',
        'twitter',
        'youtube',
    ];
}
