<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseOtherImage extends Model
{
    use HasFactory;
    private static $otherImage,$courseOtherImages,$courseOtherImage, $image, $imageName, $directory,$extension;
    private static function getImagUrl($image)
    {
        self::$extension= $image->getClientOriginalExtension();
        self::$imageName = 'other-image'.'-'.rand().'.'.self::$extension;
        self::$directory = 'adminAssets/assets/custom-image/course-other-image/';
        $image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newOtherImage($request, $id){
        foreach ($request->other_image as $image){
            self::$otherImage = new CourseOtherImage();
            self::$otherImage->course_id = $id;
            self::$otherImage->other_image = self::getImagUrl($image);
            self::$otherImage->save();
        }
    }
}
