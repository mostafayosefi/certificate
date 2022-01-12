<?php

use App\Models\Contact;
use App\Models\Page;
use App\Models\User;
use App\Models\Slider;
use App\Models\Spotlite;
use App\Models\Tracking;
use App\Models\Loginhistorie;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;



if(!function_exists('isActive'))
{
    function isActive($key , $activeClassName = 'menu-item-open menu-item-here')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $key ? $activeClassName : '';
    }
}


if(!function_exists('isShow'))
{
    function isShow($key , $showClassName = 'menu-item-active')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $showClassName : '';
        }
        return Route::currentRouteName() == $key ? $showClassName : '';
    }
}




if(!function_exists('is_Active'))
{
    function is_Active($key , $activeClassName = 'active')
    {
        if (is_array($key))
        {
            return in_array(Route::currentRouteName() , $key) ? $activeClassName : '';
        }
        return Route::currentRouteName() == $key ? $activeClassName : '';
    }
}






//get Status EmployerPackage
if(! function_exists('getStatusEmployerPackage') ) {

    function getStatusEmployerPackage($status)
    {
        if($status == 'active')
        {
            echo '<span class="badge badge-primary">فعال</span>';
        }
        elseif($status == 'inactive')
        {
            echo '<span class="badge badge-danger">غیرفعال</span>';
        }
        else
        {
            echo '<span class="badge badge-info">بررسی شده</span>';
        }
    }

}



if(! function_exists('uploadFile') ) {

    function uploadFile($file,$path,$defaultfile)
    {





 if($file){
        $current_timestamp = \Carbon\Carbon::now()->timestamp;
        $imagePath = "/upload/$path/";
        $filename = $current_timestamp . $file->getClientOriginalName();
        $file = $file->move(public_path($imagePath) , $filename);
        return $imagePath.$filename;

 }else{
     return $defaultfile;
 }
    }

}



//get date_frmat
if(! function_exists('date_frmat') ) {
    function date_frmat($date)
    {
        return Verta($date)->format('Y/m/d ساعت H:i a');

    }

}

//get date_frmat
if(! function_exists('fmod_blog') ) {
    function fmod_blog($date)
    {
$x=fmod($date, 3);
if($x=='1'){return 'storiesContYell';}
if($x=='2'){return 'storiesContBlue';}
if($x=='0'){return 'storiesContGrey';}

    }

}


//get status_read
if(! function_exists('status_read') ) {
    function status_read($status)
    { 
        if($status=='read'){ echo '<span class="label label-lg label-light-primary label-inline">خوانده شده</span>'; }
        if($status=='unread'){ echo '<span class="label label-lg label-light-warning label-inline">خوانده نشده</span>'; }

    }

}



if(! function_exists('urllink') ) {

    function urllink($urllink)
    {



$mystring = $urllink; $findme   = 'http'; $pos = strpos($mystring, $findme);
  if ($pos !== false) {  $mystring = $urllink; }else{ $mystring = 'http://'.$urllink; }
return  $mystring;

  }
}



//get Status EmployerPackage
if(! function_exists('getStatusEmployerPackage') ) {

    function getStatusEmployerPackage($status)
    {
        if($status == 'active')
        {
            echo '<span class="badge badge-success"><i data-feather="check-circle"></i> &nbsp; فعال </span>';
        }
        elseif($status == 'inactive')
        {
            echo '
            <span class="badge badge-warning"><i data-feather="x-circle"></i> &nbsp; غیرفعال </span> ';
        }
        else
        {
            echo '<span class="badge badge-info">بررسی شده</span>';
        }
    }

}




if(! function_exists('update_lastlogin') ) {
    function update_lastlogin($id, $key)
    {




        if($key=='login'){
            $myuser =  User::addSelect(['last_login' => Loginhistorie::select('created_at')
            ->whereColumn('user_id', 'users.id')
            ->where('users.id' , $id)
            ->orderByDesc('created_at')
            ->limit(1)
        ])->first();
        return $myuser->last_login;}


        if($key=='ip'){
            $myuser =  User::addSelect(['last_ip' => Loginhistorie::select('ip')
            ->whereColumn('user_id', 'users.id')
            ->where('users.id' , $id)
            ->orderByDesc('created_at')
            ->limit(1)
        ])->first();
        return $myuser->last_ip;}

    }

}



if(! function_exists('Change_status') ) {
    function Change_status($id, $table)
    {
        if($table=='users'){
            $table= User::find($id);
            Alert::success('تغییر وضعیت اکانت با موفقیت انجام شد', 'تغییرات وضعیت اکانت با موفقیت انجام شد');
        }
        if($table=='sliders'){
            $table= Slider::find($id);
            Alert::success('تغییر وضعیت اسلاید با موفقیت انجام شد', 'تغییرات وضعیت اسلاید با موفقیت انجام شد');
        }
        if($table=='spotlites'){
            $table= Spotlite::find($id);
            Alert::success('تغییر وضعیت اسپوتلایت با موفقیت انجام شد', 'تغییرات وضعیت اسپوتلایت با موفقیت انجام شد');
        }

        if($table=='trackings'){
            $table= Tracking::find($id);
            Alert::success('تغییر وضعیت مدرک آپلود شده با موفقیت انجام شد', 'تغییرات وضعیت مدرک آپلود شده با موفقیت انجام شد');
        }

        if($table=='pages'){
            $table= Page::find($id);
            Alert::success('تغییر وضعیت صفحه موردنظر با موفقیت انجام شد', 'تغییرات وضعیت صفحه موردنظر با موفقیت انجام شد');
        }



        if($table->status=='active'){$status='inactive';}
        elseif($table->status=='inactive'){$status='active';}
        $flag = $table->update([ 'status' => $status ]);
        return $flag;


    }
}





if(! function_exists('Change_show') ) {
    function Change_show($id, $table)
    {
        if($table=='contacts'){
            $table= Contact::find($id);
         }

        $flag = $table->update([ 'show' => 'read' ]);
        return $flag;

    }
}