<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\AboutBackground;
use App\Models\AboutHeader;
use App\Models\Blog;
use App\Models\BlogHeader;
use App\Models\Contact;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseHeader;
use App\Models\CourseHeaderSection;
use App\Models\Event;
use App\Models\EventHeader;
use App\Models\FeaturesHeader;
use App\Models\FeaturesItem;
use App\Models\Instructor;
use App\Models\InstructorHeader;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
        return view('frontEnd.home.home',[
            'slider' => Slider::first(),
            'categoryHeader'=>CourseHeader::first(),
            'categories'=>CourseCategory::where('publication_status',1)->get(),
            'aboutHeader'=>AboutHeader::first(),
            'aboutImage'=>AboutBackground::first(),
            'courseHeader'=>CourseHeaderSection::first(),
            'courses'=>Course::where('publication_status',1)->take(3)->get(),
            'eventHeader'=>EventHeader::first(),
            'events'=>Event::where('publication_status',1)->get(),
            'featuresHeader'=>FeaturesHeader::first(),
            'features'=>FeaturesItem::where('publication_status',1)->get(),
            'teacherHeader'=>InstructorHeader::first(),
            'teachers'=>Instructor::where('publication_status',1)->get(),
            'testimonial'=>Testimonial::first(),
            'blogHeader'=>BlogHeader::first(),
            'blogs'=>Blog::where('publication_status',1)->get(),
        ]);
    }
    public function allCourse(){
        return view('frontEnd.course.all-course',[
            'courses'=>Course::where('publication_status',1)->get(),
        ]);
    }
    public function blogDetails($id){
        return view('frontEnd.blog.blog-details',[
            'blog' => Blog::find($id),
            'postBlogs' => Blog::all(),
        ]);
    }
    public function courseDetails($id){
        return view('frontEnd.course.course-details',[
            'course' => Course::find($id),
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function contact(){
        return view('frontEnd.contact.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()
            ->with(['success' => 'Thank you for Contact Us. Your message has been submitted successfully']);
    }
}
