<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeaturesHeader;
use App\Models\FeaturesItem;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function features(){
        return view('admin.features.add-features',[
            'featuresHeader' => FeaturesHeader::first()
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'feature_title' => 'required',
            'feature_subtitle' => 'required',
            'image' => 'nullable',
        ]);
        $featuresHeader = FeaturesHeader::first();
        if ($featuresHeader){
            $featuresHeader->feature_title = $validated['feature_title'];
            $featuresHeader->feature_subtitle = $validated['feature_subtitle'];
            if ($request->file('image')) {
                if (file_exists($featuresHeader->image)) {
                    unlink($featuresHeader->image);
                    $featuresHeader->image = $this->image($request);
                }
            }
            $featuresHeader->save();
            return redirect()->back()->with('message','Features Header Section Update Successfully');
        }
        else{
            FeaturesHeader::create([
                'feature_title' =>$validated['feature_title'],
                'feature_subtitle' =>$validated['feature_subtitle'],
                'image' =>$this->image($request),
            ]);
            return redirect()->back()->with('message','Features Header Section Add Successfully');
        }
    }
    private function image(Request $request){
        $image = $request->file('image');
        $imageNewName = 'features-header'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/features-header/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }

    /***********************Features Item Loop Section *******************************/
    public function index(){
        return view('admin.features.features-item');
    }
    public function saveItem(Request $request){
        FeaturesItem::saveFeaturesItem($request);
        if($request->id){
            return redirect('admin/manage-features')->with('message','Features Item Section Update Successfully');
        }else{
            return redirect('admin/manage-features')->with('message','Features Item Section Add Successfully');
        }
    }
    public function manageItem(){
        return view('admin.features.manage-features-item',[
            'featuresItems' => FeaturesItem::all()
        ]);
    }
    public function status($id){
        FeaturesItem::status($id);
        return back()->with('message','Status changes successfully');
    }
    public function editFeaturesItem($id){
        return view('admin.features.edit-features-item',[
            'featuresItem' => FeaturesItem::find($id),
        ]);
    }
    public function deleteFeaturesItem($id){
        $featuresItem = FeaturesItem::find($id);
        if ($featuresItem->image) {
            if (file_exists($featuresItem->image)) {
                unlink($featuresItem->image);
            }
        }
        $featuresItem->delete();
        return redirect('admin/features-item')->with('message','Features Item Section Delete Successfully');
    }
}
