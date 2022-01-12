<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{


    public function index(){
        $contacts= Contact::all();
        return view('admin.contact.index' , compact(['contacts'  ]));
    }

  
 

    public function show($id)
    {
        $status=Change_show($id,'contacts');

        $contact=Contact::find($id);
        return view('admin.contact.show' , compact(['contact'  ]));
    }
 

    public function destroy($id , Request $request){
        Contact::destroy($request->id);
        Alert::info('با موفقیت حذف شد', 'اطلاعات با موفقیت حذف شد');
        return back();
    }
 




}
