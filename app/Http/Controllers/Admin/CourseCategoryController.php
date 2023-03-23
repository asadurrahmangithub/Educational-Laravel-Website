<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\CourseHeader;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    public function header(){
        $courseHeader = CourseHeader::first();
        return view('admin.course.header',compact('courseHeader'));
    }
    public function saveHeader(Request $request){
        $validated = $request->validate([
            'course_header' => 'required',
            'course_subheader' => 'required',
        ]);
        $courseHeader = CourseHeader::first();
        if ($courseHeader){
            $courseHeader->update([
                'course_header' =>$validated['course_header'],
                'course_subheader' =>$validated['course_subheader'],
            ]);
            return redirect()->back()->with('message','Course Category Update Successfully');

        }
        else{
            CourseHeader::create([
                'course_header' =>$validated['course_header'],
                'course_subheader' =>$validated['course_subheader'],
            ]);
            return redirect()->back()->with('message','Course Category Add Successfully');
        }
    }

    /*********************** Add Category Section Function *******************************/
    public function course(){
        return view('admin.course.add-course');
    }
    public function saveCourse(Request $request){
        $validated = $request->validate([
            'course_title' => 'required',
            'course_subtitle' => 'required',
        ]);
        $courseCategory = new CourseCategory();
        $courseCategory->course_title = $validated['course_title'];
        $courseCategory->course_subtitle = $validated['course_subtitle'];
        $courseCategory->category_img = $this->category_img($request);
        $courseCategory->white_category_img = $this->white_category_img($request);
        $courseCategory->publication_status = $request->publication_status;
        $courseCategory->save();
        return redirect()->route('manage-course')->with('message','Course Category Added Successfully!');
    }
    private function category_img(Request $request){
        $category_img = $request->file('category_img');
        $imageName = 'category'.'-'.rand().'.'.$category_img->extension();
        $directory = 'adminAssets/assets/custom-image/category-image/main-image/';
        $imageUrl = $directory.$imageName;
        $category_img->move($directory,$imageName);
        return $imageUrl;
    }
    private function white_category_img(Request $request){
        $white_category_img = $request->file('white_category_img');
        $imageName = 'category-hover'.'-'.rand().'.'.$white_category_img->extension();
        $directory = 'adminAssets/assets/custom-image/category-image/hover-image/';
        $imageUrl = $directory.$imageName;
        $white_category_img->move($directory,$imageName);
        return $imageUrl;
    }
    public function manageCourse(){
        return view('admin.course.manage-course',[
            'courses' => CourseCategory::all(),
        ]);
    }
    public function courseStatus($id){
        $courseCategory = CourseCategory::find($id);
        if ($courseCategory->publication_status==1){
            $courseCategory->publication_status=2;
            $courseCategory->save();
            return redirect()->route('manage-course')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $courseCategory->publication_status=1;
            $courseCategory->save();
            return redirect()->route('manage-course')->with('message','Publication Status Public Update Successfully!');
        }
    }
    public function courseEdit($id){
        return view('admin.course.edit-course',[
            'course' => CourseCategory::find($id),
        ]);
    }
    public function courseUpdate(Request $request){
        $courseCategory = CourseCategory::find($request->id);
        $courseCategory->course_title = $request->course_title;
        $courseCategory->course_subtitle = $request->course_subtitle;
        if ($request->category_img){
            unlink($courseCategory->category_img);
            $courseCategory->category_img = $this->category_img($request);
        }
        if ($request->white_category_img){
            unlink($courseCategory->white_category_img);
            $courseCategory->white_category_img = $this->white_category_img($request);
        }
        $courseCategory->publication_status = $request->publication_status;
        $courseCategory->save();
        return redirect()->route('manage-course')->with('message','Course Category Update Successfully!');
    }
    public function courseDelete($id){
        $courseCategory = CourseCategory::find($id);
        unlink($courseCategory->category_img);
        unlink($courseCategory->white_category_img);
        $courseCategory->delete();
        return redirect()->route('manage-course')->with('message','Course Category Delete Successfully!');
    }

}
