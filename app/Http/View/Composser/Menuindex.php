<?php

namespace App\Http\View\Composser;

use App\Models\Blog;
use App\Models\Page;
use App\Models\Award;
use App\Models\Setting;
use App\Models\Txtdese;
use Illuminate\Contracts\View\View;

class Menuindex{
    public function compose(View $view){


        $listpages=Page::idDescending()->get();
        $setting=Setting::find(1);
        $textdeses=Txtdese::orderBy('id','DESC')->get();
        $awards=Award::orderBy('id','DESC')->get();
        $listblogs=Blog::orderBy('id','DESC')->get();
        $limit_listpages=Page::limit('4')->orderBy('id','DESC')->get();

// $view->with('listpages', $listpages);
// $view->with('setting', $setting);

$view->with(['listpages' => $listpages , 'setting' => $setting, 'textdeses' => $textdeses
, 'awards' => $awards  , 'limit_listpages' => $limit_listpages  , 'listblogs' => $listblogs ]);


    }
}
