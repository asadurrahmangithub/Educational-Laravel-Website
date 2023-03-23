<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    protected $fillable = [
        'testimonial_title',
        'testimonial_subtitle',
        'testimonial_description',
        'customer_name',
        'customer_designation',
        'customer_description',
        'image',
    ];
}
