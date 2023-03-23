<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageHeader extends Model
{
    use HasFactory;
    protected $table = 'page_headers';
    protected $fillable = [
        'meta_keyword',
        'logo',
        'icon',
    ];
}
