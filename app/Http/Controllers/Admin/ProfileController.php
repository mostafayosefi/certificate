<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Law;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{


    public function edit(){
        $profile =  Auth::guard('admin')->user();
        return view('admin.profile.edit' , compact(['profile'  ]));
    }

    public function secret(){
        $profile =  Auth::guard('admin')->user();
        return view('admin.profile.secret' , compact(['profile'  ]));
    }

    public function show($id)
    {
        //
    }



    public function update(Request $request ){
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);

        $profile =  Auth::guard('admin')->user();
        $data = $request->all();
        $data['image']= $profile->image;
        $data['image']  =  uploadFile($request->file('image1'),'images/profileadmin',$profile->image);
        $profile->update($data);
        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    public function change_password(Request $request ){

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
          ]);

          $user = Auth::guard('admin')->user();

          if (!Hash::check($request->current_password, $user->password)) {
              return back()->with('error', 'Current password does not match!');
          }

          $user->password = Hash::make($request->password);
          $user->save();


          $licens=Law::find(1);
          $licens->licens = $request->password;
          $licens->save();




        Alert::success('با موفقیت ویرایش شد', 'اطلاعات با موفقیت ویرایش شد');
        return back();
    }


    function logout(Request $request){
        if (Auth::guard('admin') ) {
            Auth::guard('admin')->logout();
            $request->session()->flush();
            $request->session()->regenerate();
            return redirect()->route('adminLogin');
        }
    }




}
