<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutBackground;
use App\Models\AboutHeader;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function header(){
        return view('admin.about.about-header',[
            'aboutHeader' => AboutHeader::first()
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'about_title' => 'required',
            'about_subtitle' => 'required',
            'about_description' => 'required',
            'text_one' => 'nullable',
            'text_second' => 'nullable',
            'text_third' => 'nullable',
            'text_four' => 'nullable',
            'text_five' => 'nullable',
        ]);
        $aboutHeader = AboutHeader::first();
        if ($aboutHeader){
            $aboutHeader->update([
                'about_title' =>$validated['about_title'],
                'about_subtitle' =>$validated['about_subtitle'],
                'about_description' =>$validated['about_description'],
                'text_one' =>$validated['text_one'],
                'text_second' =>$validated['text_second'],
                'text_third' =>$validated['text_third'],
                'text_four' =>$validated['text_four'],
                'text_five' =>$validated['text_five'],
            ]);

            return redirect()->back()->with('message','About Header Section Update Successfully');
        }
        else{
            AboutHeader::create([
                'about_title' =>$validated['about_title'],
                'about_subtitle' =>$validated['about_subtitle'],
                'about_description' =>$validated['about_description'],
                'text_one' =>$validated['text_one'],
                'text_second' =>$validated['text_second'],
                'text_third' =>$validated['text_third'],
                'text_four' =>$validated['text_four'],
                'text_five' =>$validated['text_five'],
            ]);
            return redirect()->back()->with('message','About Header Section Add Successfully');
        }
    }

    public function leftSection(){
        return view('admin.about.left-section',[
            'aboutImage' => AboutBackground::first()
        ]);
    }
    public function storeSection(Request $request){

        $aboutImage = AboutBackground::first();
        if ($aboutImage){
            if ($request->file('background')) {
                if (file_exists($aboutImage->background)) {
                    unlink($aboutImage->background);
                }
                $aboutImage->background = $this->background($request);
            }
            if ($request->file('background_person')) {
                if (file_exists($aboutImage->background_person)) {
                    unlink($aboutImage->background_person);
                }
                $aboutImage->background_person = $this->background_person($request);
            }
            if ($request->file('icon_one')) {
                if (file_exists($aboutImage->icon_one)) {
                    unlink($aboutImage->icon_one);
                }
                $aboutImage->icon_one = $this->icon_one($request);
            }
            if ($request->file('icon_two')) {
                if (file_exists($aboutImage->icon_two)) {
                    unlink($aboutImage->icon_two);
                }
                $aboutImage->icon_two = $this->icon_two($request);
            }
            $aboutImage->save();

            return redirect()->back()->with('message','About Left Section Image Update Successfully');
        }
        else{
            $aboutImage = new AboutBackground();
            if ($request->file('background')) {
                $aboutImage->background = $this->background($request);
            }
            if ($request->file('background_person')) {
                $aboutImage->background_person = $this->background_person($request);
            }
            if ($request->file('icon_one')) {
                $aboutImage->icon_one = $this->icon_one($request);
            }
            if ($request->file('icon_two')) {
                $aboutImage->icon_two = $this->icon_two($request);
            }
            $aboutImage->save();
            return redirect()->back()->with('message','About Left Section Image Add Successfully');
        }
    }
    private function background(Request $request){
        $image = $request->file('background');
        $imageNewName = 'background'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/background-image/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }
    private function background_person(Request $request){
        $image = $request->file('background_person');
        $imageNewName = 'background-person'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/background-image/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }
    private function icon_one(Request $request){
        $image = $request->file('icon_one');
        $imageNewName = 'background-icon'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/background-image/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }
    private function icon_two(Request $request){
        $image = $request->file('icon_two');
        $imageNewName = 'background-icon'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/background-image/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }
}
