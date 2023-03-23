<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\InstructorHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InstructorController extends Controller
{
    public function index(){
        return view('admin.instructor.add-instructor');
    }
    public function save(Request $request){
        $validated = $request->validate([
            'teacher_name' => 'required',
            'designation' => 'required',
            'image' => 'required',
            'facebook' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
        ]);
        $teacher = new Instructor();
        $teacher->teacher_name = $validated['teacher_name'];
        $teacher->designation = $validated['designation'];

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = 'teacher'.time().'.'.$ext;
            $teacher->image = $file->move('adminAssets/assets/custom-image/teacher-image/',$fileName);
        }
        $teacher->facebook = Str::slug($validated['facebook']);
        $teacher->linkedin = Str::slug($validated['linkedin']);
        $teacher->twitter = Str::slug($validated['twitter']);
        $teacher->publication_status = $request->publication_status;
        $teacher->save();
        return redirect()->route('manage-instructor')->with('message','Instructor Data Added Successfully!');


    }
    public function updateInstructor(Request $request){
        $teacher = Instructor::find($request->id);
        $teacher->teacher_name = $request->teacher_name;
        $teacher->designation = $request->designation;

        if ($request->hasFile('image')){
            if (file_exists($teacher->image)) {
                unlink($teacher->image);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $fileName = 'teacher'.time().'.'.$ext;
            $teacher->image = $file->move('adminAssets/assets/custom-image/teacher-image/',$fileName);
        }
        $teacher->facebook = Str::slug($request->facebook);
        $teacher->linkedin = Str::slug($request->linkedin);
        $teacher->twitter = Str::slug($request->twitter);
        $teacher->publication_status = $request->publication_status;
        $teacher->save();
        return redirect()->route('manage-instructor')->with('message','Instructor Data Update Successfully!');

    }
    public function manageInstructor(){
        return view('admin.instructor.manage-instructor',[
            'teachers' => Instructor::all(),
        ]);
    }
    public function editInstructor($id){
        return view('admin.instructor.edit-instructor',[
            'teacher' => Instructor::find($id),
        ]);
    }
    public function statusInstructor($id){
        $teacher = Instructor::find($id);
        if ($teacher->publication_status==1){
            $teacher->publication_status=2;
            $teacher->save();
            return redirect()->route('manage-instructor')->with('message','Publication Status UnPublic Update Successfully!');
        }
        else{
            $teacher->publication_status=1;
            $teacher->save();
            return redirect()->route('manage-instructor')->with('message','Publication Status Public Update Successfully!');
        }
    }
    public function deleteInstructor($id){
        $teacher = Instructor::find($id);
        unlink($teacher->image);
        $teacher->delete();
        return redirect()->route('manage-instructor')->with('message','One Teacher Data Delete Successfully!');
    }

    /***********************Start Instructor Section Header *******************************/
    public function instructorHeader(){
        return view('admin.instructor.instructor-header',[
            'instructorHeader' => InstructorHeader::first(),
        ]);
    }
    public function saveHeader(Request $request){
        $validated = $request->validate([
            'instructor_header' => 'required',
            'instructor_subheader' => 'nullable',
        ]);
        $instructorHeader = InstructorHeader::first();
        if ($instructorHeader){
            $instructorHeader->update([
                'instructor_header' =>$validated['instructor_header'],
                'instructor_subheader' =>$validated['instructor_subheader'],
            ]);
            return redirect()->back()->with('message','Instructor Header Update Successfully');

        }
        else{
            InstructorHeader::create([
                'instructor_header' =>$validated['instructor_header'],
                'instructor_subheader' =>$validated['instructor_subheader'],
            ]);
            return redirect()->back()->with('message','Instructor Header Add Successfully');
        }
    }
}
