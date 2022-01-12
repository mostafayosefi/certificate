<?php

namespace App\Http\Controllers\Index;

use App\Models\Faq;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Txtdese;
use App\Models\Spotlite;
use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use phpDocumentor\Reflection\Types\Null_;
use App\Models\Blog;
use App\Models\Contact;

class IndexController extends Controller
{


    public function index(){
        $sliders= Slider::where('status' , 'active')->orderby('id' , 'desc')->get();
        $spotlites= Spotlite::where('status' , 'active')->orderby('id' , 'asc')->get();
        return view('index.home.myindex' , compact(['sliders' , 'spotlites'  ]));
    }


    public function service($id){
        $txtdeses= Txtdese::all();
        $page= Page::find($id);
        return view('index.home.page' , compact(['txtdeses' , 'page'  ]));
    }

    public function faqs(){
        $txtdese= Txtdese::find(4);
        $faqs= Faq::all();
        return view('index.home.faqs' , compact(['txtdese'  , 'faqs' ]));
    }

    public function blogs(){
        $blogs= Blog::all();
        return view('index.home.blogs' , compact([ 'blogs' ]));
    }

    public function blog($id){
        $blogs= Blog::all();
        $blog= Blog::find($id);
        return view('index.home.blog' , compact([ 'blogs' , 'blog']));
    }

    public function contactus(){
        $txtdese= Txtdese::find(3);
        $infocontact= Txtdese::find(5);
        return view('index.home.contactus' , compact(['txtdese' , 'infocontact' ]));
    }

    public function store_contact(Request $request){

        $request->validate([
            'captcha' => 'captcha'
        ]);

        $data = $request->all();

/*

        $data['image_desktop']  =  uploadFile($request->file('image1'),'images/sliders','');
        $data['image_mobile']  =  uploadFile($request->file('image2'),'images/sliders',''); */


    Contact::create($data);


    return back()->with(['success_index' => 'Your message was successfully sent to management' ]);
    }


    public function tracking(){
        $txtdese= Txtdese::find(2);
        $tracking=Tracking::where('codetracking' , '=' , Session::get('codetracking'))->first();
        return view('index.home.tracking' , compact(['txtdese' , 'tracking'   ]));
    }

    public function tracking_result(Request $request){

        $txtdeses= Txtdese::all();
        $tracking=Tracking::where('codetracking' , '=' ,$request->codetracking)->first();

        // if($tracking){echo 'Ok';}else{
        //     echo 'No';
        // }

        // return back()->with(['success_index' => 'Your message was successfully sent to management' ]);


        if($tracking){
            return back()->with(['success_index' => 'Your document was successfully found'  ,  'codetracking' => $request->codetracking]);

        }else{
            return back()->with(['danger_index' => 'Unfortunately, your document could not be found'  ,  'codetracking' => $request->codetracking]);
        }


        // return view('index.home.tracking' , compact(['txtdeses'   ]));

        }



}
