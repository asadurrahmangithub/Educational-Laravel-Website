<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventHeader extends Model
{
    use HasFactory;
    protected $table = 'event_headers';
    protected $fillable = [
        'event_title',
        'event_subtitle',
        'image',
    ];
}
