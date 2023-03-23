<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutBackground extends Model
{
    use HasFactory;
    protected $table = 'about_backgrounds';
    protected $fillable = [
        'background',
        'background_person',
        'icon_one',
        'icon_two',
    ];


}
