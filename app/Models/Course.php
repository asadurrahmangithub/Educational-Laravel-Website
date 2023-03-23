<?php

namespace App\Models;

use App\Http\Requests\CourseFormRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'course_name',
        'button_1',
        'button_2',
        'course_description',
        'technology',
        'cost',
        'total_cost',
        'semester',
        'student',
        'image',
    ];
    private static $course, $image, $imageNewName, $directory, $imgUrl;
    public static function saveCourse(CourseFormRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->id){
            self::$course = Course::find($request->id);
        }else{
            self::$course =new Course();
        }
        self::$course->course_name = $validatedData['course_name'];
        self::$course->button_1 = $validatedData['button_1'];
        self::$course->button_2 = $validatedData['button_2'];
        self::$course->course_description = $validatedData['course_description'];
        self::$course->technology = $validatedData['technology'];
        self::$course->cost = $validatedData['cost'];
        self::$course->total_cost = $validatedData['total_cost'];
        self::$course->semester = $validatedData['semester'];
        self::$course->student = $validatedData['student'];
        if ($request->file('image')) {
            if (file_exists(self::$course->image)) {
                unlink(self::$course->image);
            }
            self::$course->image = self::getImagUrl($request);
        }
        self::$course->publication_status = $request->publication_status;
        self::$course->save();
        return self::$course;
    }
    private static function getImagUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = 'course-image'.'-'.rand().'.'.self::$image->extension();
        self::$directory = 'adminAssets/assets/custom-image/course-image/';
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
    public function courseOtherImages(){
        return $this->hasMany(CourseOtherImage::class,'course_id','id');
    }

    public static function status($id)
    {
        self::$course = Course::find($id);
        if (self::$course->publication_status == 1) {
            self::$course->publication_status = 2;
            self::$course->save();
        } else {
            self::$course->publication_status = 1;
            self::$course->save();
        }
    }
}
