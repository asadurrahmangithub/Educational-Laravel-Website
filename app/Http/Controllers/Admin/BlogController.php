<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogHeader;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function header(){
        $blogHeader = BlogHeader::first();
        return view('admin.blog.blog-header',compact('blogHeader'));
    }
    public function saveHeader(Request $request){
        $validated = $request->validate([
            'blog_header' => 'required',
            'blog_subheader' => 'required',
        ]);
        $courseHeader = BlogHeader::first();
        if ($courseHeader){
            $courseHeader->update([
                'blog_header' =>$validated['blog_header'],
                'blog_subheader' =>$validated['blog_subheader'],
            ]);
            return redirect()->back()->with('message','Blog Header Update Successfully');

        }
        else{
            BlogHeader::create([
                'blog_header' =>$validated['blog_header'],
                'blog_subheader' =>$validated['blog_subheader'],
            ]);
            return redirect()->back()->with('message','Blog Header Add Successfully');
        }
    }

    /*********************** Add Blog Section Function *******************************/
    public function index(){
        return view('admin.blog.add-blog');
    }
    public function store(Request $request){
        Blog::saveBlogContent($request);
        if($request->id){
            return redirect('admin/manage-blog')->with('message','Blog Section Update Successfully');
        }else{
            return redirect('admin/manage-blog')->with('message','Blog Section Add Successfully');
        }
    }
    public function manage(){
        return view('admin.blog.manage-blog',[
            'blogs' => Blog::all(),
        ]);
    }
    public function edit($id){
        return view('admin.blog.edit-blog',[
            'blog' => Blog::find($id),
        ]);
    }
    public function status($id){
        Blog::status($id);
        return back()->with('message','Status changes successfully');
    }
    public function deleteBlog($id){
        $blogContent = Blog::find($id);
        if ($blogContent->image) {
            if (file_exists($blogContent->image)) {
                unlink($blogContent->image);
            }
        }
        $blogContent->delete();
        return redirect('admin/manage-blog')->with('message','Blog Section Delete Successfully');
    }


}
