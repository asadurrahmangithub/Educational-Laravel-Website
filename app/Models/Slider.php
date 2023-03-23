<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';
    protected $fillable = [
        'slider_title',
        'slider_title_two',
        'slider_subtitle',
        'slider_description',
        'background',
        'person',
        'icon1',
        'icon2',
        'icon3',
    ];
}
