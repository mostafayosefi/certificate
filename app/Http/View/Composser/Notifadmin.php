<?php

namespace App\Http\View\Composser;
 
use App\Models\Contact;
use Illuminate\Contracts\View\View;

class Notifadmin{
    public function compose(View $view){

 
        $unread_contact_get=Contact::where('show' , 'unread')->get();

        $unread_contact=Contact::where('show' , 'unread')->count();
         
 

$view->with(['unread_contact' => $unread_contact  , 'unread_contact_get' => $unread_contact_get    ]);


    }
}
