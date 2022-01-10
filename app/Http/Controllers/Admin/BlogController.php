<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{


    public function index(){
        $blogs= Blog::all();
        return view('admin.blog.index' , compact(['blogs'  ]));
    }


    public function create(){
        return view('admin.blog.create' );
    }

    public function edit($id){
        $blog=Blog::find($id);
        return view('admin.blog.edit' , compact(['blog'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);
        $data = $request->all();
        $data['image']  =  uploadFile($request->file('image1'),'images/blogs','');

       Blog::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.blog.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , Blog $blog){
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);
        $blog=Blog::find($id);
        $data = $request->all();
        $data['image']= $blog->image;
        $data['image']  =  uploadFile($request->file('image1'),'images/blogs',$blog->image);
        $blog->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Blog::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }




}
