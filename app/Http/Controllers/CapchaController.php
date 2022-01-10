<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CapchaController extends Controller
{

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }


}
