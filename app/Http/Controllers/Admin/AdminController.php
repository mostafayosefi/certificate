<?php


namespace App\Http\Controllers\Admin;
use SweetAlert;


use App\Http\Requests;
use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {

        $trackings= Tracking::all();
        return view('admin.dashboard.index' , compact(['trackings'  ]));
    }

    public function demoindex()
    {
       return view('admin.index');
    }






    public function metronic()
    {
       return view('management.index');
    }


    public function mysite(){

       return view('user.dashboard');
    }



}
