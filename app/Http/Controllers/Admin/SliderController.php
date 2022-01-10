<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{

    public function index(){
        $sliders= Slider::all();
        return view('admin.slider.index' , compact(['sliders'  ]));

    }

    public function create()
    {
        return view('admin.slider.create' );
    }

    public function edit($id){
        $slider=Slider::find($id);
        return view('admin.slider.edit' , compact(['slider'  ]));
    }


    public function update(Request $request, $id , Slider $slider){

        $request->validate([
            'name' => 'required', 

        ]);
        $slider=Slider::find($id);
        $data = $request->all();
        $data['image_desktop']= $slider->image_desktop;
        $data['image_mobile']= $slider->image_mobile;
        $data['image_desktop']  =  uploadFile($request->file('image1'),'images/sliders',$slider->image_desktop);
        $data['image_mobile']  =  uploadFile($request->file('image2'),'images/sliders',$slider->image_mobile);
 $slider->update($data);
Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
return back();

    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image1'  => 'required',
            'image2'  => 'required',
        ]);

        $data = $request->all();
        $data['image_desktop']  =  uploadFile($request->file('image1'),'images/sliders','');
        $data['image_mobile']  =  uploadFile($request->file('image2'),'images/sliders','');


    Slider::create($data);
Alert::success('با موفقیت ثبت شد', 'اطلاعات جدید با موفقیت ثبت شد');
return redirect()->route('admin.slider.index');
    }


    public function destroy($id , Request $request)
    {
 Slider::destroy($request->id);
Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
return back();
    }




    public function status(Request $request , $id){
        $status=Change_status($id,'sliders');
        return back();
            }

}


