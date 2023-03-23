<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    private static $eventContent;
    public static function saveEventContent($request)
    {
        $validated = $request->validate([
            'event_title' => 'required',
            'address' => 'required',
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        if ($request->id){
            self::$eventContent = Event::find($request->id);
        }else{
            self::$eventContent = new Event();
        }
        self::$eventContent->event_title = $validated['event_title'];
        self::$eventContent->address = $validated['address'];
        self::$eventContent->date = $validated['date'];
        self::$eventContent->start_time = $validated['start_time'];
        self::$eventContent->end_time = $validated['end_time'];
        self::$eventContent->publication_status = $request->publication_status;
        self::$eventContent->save();
    }
    public static function status($id)
    {
        self::$eventContent = Event::find($id);
        if (self::$eventContent->publication_status == 1) {
            self::$eventContent->publication_status = 2;
            self::$eventContent->save();
        } else {
            self::$eventContent->publication_status = 1;
            self::$eventContent->save();
        }
    }
}
