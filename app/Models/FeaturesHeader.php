<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturesHeader extends Model
{
    use HasFactory;
    protected $table = 'features_headers';
    protected $fillable = [
        'feature_title',
        'feature_subtitle',
        'image',
    ];
}
