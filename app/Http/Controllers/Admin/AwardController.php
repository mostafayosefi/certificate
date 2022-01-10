<?php

namespace App\Http\Controllers\Admin;

use App\Models\Award;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AwardController extends Controller
{


    public function index(){
        $awards= Award::all();
        return view('admin.award.index' , compact(['awards'  ]));
    }


    public function create(){
        return view('admin.award.create' );
    }

    public function edit($id){
        $award=Award::find($id);
        return view('admin.award.edit' , compact(['award'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $data = $request->all();
        $data['image']  =  uploadFile($request->file('image1'),'images/awards','');

       Award::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.award.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , Award $award){
        $request->validate([
            'title' => 'required', 
        ]);
        $award=Award::find($id);
        $data = $request->all();
        $data['image']= $award->image;
        $data['image']  =  uploadFile($request->file('image1'),'images/awards',$award->image);
        $award->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Award::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }




}
