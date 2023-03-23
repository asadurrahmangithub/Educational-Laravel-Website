<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        return view('admin.testimonial.add-testimonial',[
            'testimonial' => Testimonial::first(),
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'testimonial_title' => 'required',
            'testimonial_subtitle' => 'required',
            'testimonial_description' => 'required',
            'customer_name' => 'required',
            'customer_designation' => 'nullable',
            'customer_description' => 'required',
            'image' => 'nullable',
        ]);
        $testimonial = Testimonial::first();
        if ($testimonial){
            $testimonial->testimonial_title = $validated['testimonial_title'];
            $testimonial->testimonial_subtitle = $validated['testimonial_subtitle'];
            $testimonial->testimonial_description = $validated['testimonial_description'];
            $testimonial->customer_name = $validated['customer_name'];
            $testimonial->customer_designation = $validated['customer_designation'];
            $testimonial->customer_description = $validated['customer_description'];
            if ($request->file('image')) {
                if (file_exists($testimonial->image)) {
                    unlink($testimonial->image);
                    $testimonial->image = $this->image($request);
                }
            }
            $testimonial->save();
            return redirect()->back()->with('message','Testimonial Section Update Successfully');
        }
        else{
            Testimonial::create([
                'testimonial_title' =>$validated['testimonial_title'],
                'testimonial_subtitle' =>$validated['testimonial_subtitle'],
                'testimonial_description' =>$validated['testimonial_description'],
                'customer_name' =>$validated['customer_name'],
                'customer_designation' =>$validated['customer_designation'],
                'customer_description' => $validated['customer_description'],
                'image' =>$this->image($request),
            ]);
            return redirect()->back()->with('message','Testimonial Section Add Successfully');
        }
    }
    private function image(Request $request){
        $image = $request->file('image');
        $imageNewName = 'testimonial'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/testimonial-image/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }
}
