<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountSetting;
use App\Models\PageFooter;
use App\Models\PageHeader;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function page(){
        return view('admin.setting.page-header',[
            'pageHeader' => PageHeader::first()
        ]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            'meta_keyword' => 'required',
            'logo' => 'nullable',
            'icon' => 'nullable',
        ]);
        $pageHeader = PageHeader::first();
        if ($pageHeader){
            $pageHeader->meta_keyword = $validated['meta_keyword'];
            if ($request->file('logo')) {
                if (file_exists($pageHeader->logo)) {
                    unlink($pageHeader->logo);
                }
                $pageHeader->logo = $this->image($request);
            }
            if ($request->file('icon')) {
                if (file_exists($pageHeader->icon)) {
                    unlink($pageHeader->icon);
                }
                $pageHeader->icon = $this->icon($request);
            }
            $pageHeader->save();
            return redirect()->back()->with('message','Page Header Section Update Successfully');
        }
        else{
            PageHeader::create([
                'meta_keyword' =>$validated['meta_keyword'],
                'logo' =>$this->image($request),
                'icon' =>$this->icon($request),
            ]);
            return redirect()->back()->with('message','Page Header Section Add Successfully');
        }
    }
    private function image(Request $request){
        $image = $request->file('logo');
        $imageNewName = 'logo'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/page-image/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }
    private function icon(Request $request){
        $image = $request->file('icon');
        $imageNewName = 'icon'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/page-image/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }

    /*********************** Add Page Footer Function *******************************/
    public function footer(){
        return view('admin.setting.page-footer',[
            'pageFooter' => PageFooter::first()
        ]);
    }
    public function save(Request $request){
        $validated = $request->validate([
            'address' => 'required',
            'number' => 'required',
            'email' => 'required|email',

            'description' => 'required',
            'image' => 'nullable',

            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
            'youtube' => 'nullable',

        ]);
        $pageFooter = PageFooter::first();
        if ($pageFooter){
            $pageFooter->address = $validated['address'];
            $pageFooter->number = $validated['number'];
            $pageFooter->email = $validated['email'];
            $pageFooter->description = $validated['description'];
            if ($request->file('image')) {
                if (file_exists($pageFooter->image)) {
                    unlink($pageFooter->image);
                }
                $pageFooter->image = $this->footerImage($request);
            }
            $pageFooter->facebook = $validated['facebook'];
            $pageFooter->instagram = $validated['instagram'];
            $pageFooter->linkedin = $validated['linkedin'];
            $pageFooter->twitter = $validated['twitter'];
            $pageFooter->youtube = $validated['youtube'];
            $pageFooter->save();
            return redirect()->back()->with('message','Page Footer Section Update Successfully');
        }
        else{
            PageFooter::create([
                'address' =>$validated['address'],
                'number' =>$validated['number'],
                'email' =>$validated['email'],

                'description' =>$validated['description'],
                'image' =>$this->footerImage($request),

                'facebook' =>$validated['facebook'],
                'instagram' =>$validated['instagram'],
                'linkedin' =>$validated['linkedin'],
                'twitter' =>$validated['twitter'],
                'youtube' =>$validated['youtube'],

            ]);
            return redirect()->back()->with('message','Page Footer Section Add Successfully');
        }
    }
    private function footerImage(Request $request){
        $image = $request->file('image');
        $imageNewName = 'footer'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/page-image/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }
    /*********************** Admin Page Account Setting Function *******************************/
    public function account(){
        return view('admin.setting.account-setting',[
            'accountImage' => AccountSetting::first()
        ]);
    }
    public function upload(Request $request){
        $accountImage = AccountSetting::first();
        if ($accountImage){
            if ($request->file('image')) {
                if (file_exists($accountImage->image)) {
                    unlink($accountImage->image);
                }
                $accountImage->image = $this->AccountImage($request);
            }
            $accountImage->save();
            return redirect()->back()->with('message','Account Image Update Successfully');
        }
        else{
            AccountSetting::create([
                'image' =>$this->AccountImage($request),
            ]);
            return redirect()->back()->with('message','Account Image Add Successfully');
        }
    }
    private function AccountImage(Request $request){
        $image = $request->file('image');
        $imageNewName = 'account'.'-'.rand().'.'.$image->extension();
        $directory = 'adminAssets/assets/custom-image/account-image/';
        $imgUrl = $directory.$imageNewName;
        $image->move($directory, $imageNewName);
        return $imgUrl;
    }
}
