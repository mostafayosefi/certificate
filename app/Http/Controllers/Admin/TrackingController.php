<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tracking;
use App\Rules\Uniqdateupdate;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\View;

class TrackingController extends Controller
{


    public function index(){
        $trackings= Tracking::all();
        return view('admin.tracking.index' , compact(['trackings'  ]));
    }


    public function create(){
        return view('admin.tracking.create' );
    }

    public function edit($id){
        $tracking=Tracking::find($id);
        return view('admin.tracking.edit' , compact(['tracking'  ]));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'codetracking' => 'required|unique:trackings,codetracking,$request->codetracking',
            'image1' => 'required',
        ]);
        $data = $request->all();
        $data['image']  =  uploadFile($request->file('image1'),'images/trackings','');

       Tracking::create($data);
       Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
        return redirect()->route('admin.tracking.index');
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request, $id , Tracking $tracking){


        $request->validate([
            'name' => 'required',
            'codetracking' => ['required'  ,new Uniqdateupdate('trackings','codetracking',$id)] ,
        ]);



        $tracking=Tracking::find($id);
        $data = $request->all();
        $data['image']= $tracking->image;
        $data['image']  =  uploadFile($request->file('image1'),'images/trackings',$tracking->image);
        $tracking->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function destroy($id , Request $request){
        Tracking::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }

    public function status(Request $request , $id){
        $status=Change_status($id,'trackings');
        return back();
    }





}
