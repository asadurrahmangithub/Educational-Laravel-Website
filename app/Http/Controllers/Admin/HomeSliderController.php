<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeSliderController extends Controller
{
    public function index(){
        return view('admin.slider.slider',[
            'slider' => Slider::first(),
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'slider_title' => 'required',
            'slider_title_two' => 'nullable',
            'slider_subtitle' => 'required',
            'slider_description' => 'required',

            'background' => 'nullable',
            'person' => 'nullable',
            'icon1' => 'nullable',
            'icon2' => 'nullable',
            'icon3' => 'nullable',
        ]);
        $slider = Slider::first();
        if ($slider){
            $slider->slider_title = $validated['slider_title'];
            $slider->slider_title_two = $validated['slider_title_two'];
            $slider->slider_subtitle = $validated['slider_subtitle'];
            $slider->slider_description = $validated['slider_description'];

            if ($request->file('background')) {
                if (file_exists($slider->background)) {
                    unlink($slider->background);
                    $slider->background = $this->backgroundImage($request);
                }
            }
            if ($request->file('person')) {
                if (file_exists($slider->person)) {
                    unlink($slider->person);
                    $slider->person = $this->backgroundPerson($request);
                }
            }
            if ($request->file('icon1')) {
                if (file_exists($slider->icon1)) {
                    unlink($slider->icon1);
                }
                $slider->icon1 = $this->alimentIcon($request);
            }
            if ($request->file('icon2')) {
                if (file_exists($slider->icon2)) {
                    unlink($slider->icon2);
                }
                $slider->icon2 = $this->alimentIcon2($request);
            }
            if ($request->file('icon3')) {
                if (file_exists($slider->icon3)) {
                    unlink($slider->icon3);
                }
                $slider->icon3 = $this->alimentIcon3($request);
            }
            $slider->save();
            return redirect()->back()->with('message','Event Header Section Update Successfully');
        }
        else{
            $slider = new Slider();
            $slider->slider_title = $validated['slider_title'];
            $slider->slider_title_two = $validated['slider_title_two'];
            $slider->slider_subtitle = $validated['slider_subtitle'];
            $slider->slider_description = $validated['slider_description'];

            if ($request->hasFile('background')){
                $slider->background = $this->backgroundImage($request);
            }
            if ($request->hasFile('person')){
                $slider->person = $this->backgroundPerson($request);
            }
            if ($request->hasFile('icon1')){
                $slider->icon1 = $this->alimentIcon($request);
            }
            if ($request->hasFile('icon2')){
                $slider->icon2 = $this->alimentIcon2($request);
            }
            if ($request->hasFile('icon3')){
                $slider->icon3 = $this->alimentIcon3($request);
            }
            $slider->save();


            return redirect()->back()->with('message','Event Header Section Add Successfully');
        }
    }
    private function backgroundImage($request){
        $image = $request->file('background');
        $imageName = 'background-image'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/home-slider/';
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }
    private function backgroundPerson($request){
        $image = $request->file('person');
        $imageName = 'background-person'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/home-slider/';
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }
    private function alimentIcon($request){
        $image = $request->file('icon1');
        $imageName = 'aliment-icon1'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/home-slider/';
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }
    private function alimentIcon2($request){
        $image = $request->file('icon2');
        $imageName = 'aliment-icon2'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/home-slider/';
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }
    private function alimentIcon3($request){
        $image = $request->file('icon3');
        $imageName = 'aliment-icon3'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/home-slider/';
        $image->move($directory, $imageName);
        return $directory.$imageName;
    }

    public function destroy($id){
        $sliderIcon = Slider::findOrFail($id);
        if (File::exists($sliderIcon->icon1)){
            File::delete($sliderIcon->icon1);
            $sliderIcon->icon1 = null;
            $sliderIcon->save();

        }
        return redirect()->back()->with('message','Aliment Icon 1 Delete Successfully');
    }
    public function destroy2($id){
        $sliderIcon = Slider::findOrFail($id);
        if (File::exists($sliderIcon->icon2)){
            File::delete($sliderIcon->icon2);
            $sliderIcon->icon2 = null;
            $sliderIcon->save();

        }
        return redirect()->back()->with('message','Aliment Icon 2 Delete Successfully');
    }
    public function destroy3($id){
        $sliderIcon = Slider::findOrFail($id);
        if (File::exists($sliderIcon->icon3)){
            File::delete($sliderIcon->icon3);
            $sliderIcon->icon3 = null;
            $sliderIcon->save();

        }
        return redirect()->back()->with('message','Aliment Icon 3 Delete Successfully');
    }
}
