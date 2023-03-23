<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blogContent, $image, $imageNewName, $directory, $imgUrl;
    public static function saveBlogContent($request)
    {
        $validated = $request->validate([
            'blog_title' => 'required',
            'first_description' => 'required',
            'middle_description' => 'nullable',
            'last_description' => 'nullable',
            'author' => 'required',
            'date' => 'required',
            'image' => 'nullable',
        ]);
        if ($request->id){
            self::$blogContent = Blog::find($request->id);
        }else{
            self::$blogContent = new Blog();
        }
        self::$blogContent->blog_title = $validated['blog_title'];
        self::$blogContent->first_description = $validated['first_description'];
        self::$blogContent->middle_description = $validated['middle_description'];
        self::$blogContent->last_description = $validated['last_description'];
        self::$blogContent->author = $validated['author'];
        self::$blogContent->date = $validated['date'];
        if ($request->file('image')) {
            if (file_exists(self::$blogContent->image)) {
                unlink(self::$blogContent->image);
            }
            self::$blogContent->image = self::getImagUrl($request);
        }
        self::$blogContent->publication_status = $request->publication_status;
        self::$blogContent->save();
    }

    private static function getImagUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = 'blog'.'-'.rand().'.'.self::$image->extension();
        self::$directory = 'adminAssets/assets/custom-image/blog-image/';
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }
    public static function status($id)
    {
        self::$blogContent = Blog::find($id);
        if (self::$blogContent->publication_status == 1) {
            self::$blogContent->publication_status = 2;
            self::$blogContent->save();
        } else {
            self::$blogContent->publication_status = 1;
            self::$blogContent->save();
        }
    }
}
