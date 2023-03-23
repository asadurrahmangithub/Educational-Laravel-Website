<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseFormRequest;
use App\Models\Course;
use App\Models\CourseHeaderSection;
use App\Models\CourseOtherImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    private $course;
    public function header(){
        return view('admin.course-details.course-header',[
            'courseHeader' => CourseHeaderSection::first()
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'course_header' => 'required',
            'course_subheader' => 'required'
        ]);
        $courseHeader = CourseHeaderSection::first();
        if ($courseHeader){
            $courseHeader->course_header = $validated['course_header'];
            $courseHeader->course_subheader = $validated['course_subheader'];
            $courseHeader->save();
            return redirect()->back()->with('message','Course Header Section Update Successfully');
        }
        else{
            CourseHeaderSection::create([
                'course_header' =>$validated['course_header'],
                'course_subheader' =>$validated['course_subheader'],
            ]);
            return redirect()->back()->with('message','Course Header Section Add Successfully');
        }
    }

    public function index(){
        return view('admin.course-details.add-course');
    }
    public function save(CourseFormRequest $request){
        $this->course = Course::saveCourse($request);
        CourseOtherImage::newOtherImage($request, $this->course->id);
        return redirect('admin/manage-section')->with('message','Category Section Add Successfully');


    }
    public function manage(){
        return view('admin.course-details.manage-course',[
            'courses' => Course::all()
        ]);
    }
    public function status($id){
        Course::status($id);
        return back()->with('message','Status changes successfully');
    }
    public function edit($id){
        return view('admin.course-details.edit-course',[
            'course' => Course::find($id)
        ]);
    }
    public function update(CourseFormRequest $request, $id){
        Course::saveCourse($request);
        if ($request->file('other_image')){
            CourseOtherImage::newOtherImage($request, $id);
        }
        return redirect('admin/manage-section')->with('message','Course Section Update Successfully');
    }
    public function remove($id){
        $courseOtherImage = CourseOtherImage::findOrFail($id);
        if (File::exists($courseOtherImage->other_image)){
            File::delete($courseOtherImage->other_image);
        }
        $courseOtherImage->delete();
        return redirect()->back()->with('message','Course Other Image Delete Successfully');
    }
    public function deleteCourse($id){
        $course = Course::findOrFail($id);
        if ($course->image) {
            if (file_exists($course->image)) {
                unlink($course->image);
            }
        }
        if ($course->courseOtherImages){
            foreach ($course->courseOtherImages as $image){
                if (File::exists($image->other_image)){
                    File::delete($image->other_image);
                }
            }

        }
        $course->delete();
        return back()->with('message', 'Course Section Delete Successfully');
    }
}
