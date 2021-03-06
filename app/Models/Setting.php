<?php

namespace App\Models;

use App\Models\Law;
use App\Models\Mngfinical;
use App\Models\Getwaypayment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{


     protected $fillable = [ 'title', 'instagram' ,   'facebook', 'twitter' ,
      'youtube', 'tell' ,   'email', 'address' ,   'description', 'keyword' ,
       'fcopy', 'analatik' ,   'codetiket', 'favicon' ,   'logo',   '_token',
       'favicon',   'updated_at',     'created_at' ,    ];

    //    protected $guarded = ['title', 'instagram' ,   'facebook', 'twitter' ,
    //   'youtube', 'tell' ,   'email', 'address' ,   'description', 'keyword' ,
    //    'fcopy', 'analatik' ,   'codetiket', 'favicon' ,   'logo',   '_token', ];





    // protected $hidden =[
    //     'hidden',
    // ];


    public function mngfinical(){
        return $this->hasOne(Mngfinical::class , 'id');
    }

    public function law(){
        return $this->hasOne(Law::class , 'id');
    }


    public function getwaypayments()
    {
        return $this->hasMany(Getwaypayment::class, 'setting_id');
    }




}
