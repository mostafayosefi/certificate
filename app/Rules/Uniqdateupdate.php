<?php

namespace App\Rules;

use App\Models\Tracking;
use Illuminate\Contracts\Validation\Rule;
use phpDocumentor\Reflection\Types\Null_;

class Uniqdateupdate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($name_table , $attr , $id)
    {

        $this->attr = $attr;
        $this->id = $id;
        $this->name_table = $name_table;    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public $id;

    public function passes($attribute, $value)
    {

        if($this->name_table=='users'){ $model=  User::query(); }
        if($this->name_table=='pages'){ $model=  User::query(); }
        if($this->name_table=='trackings'){ $model=  Tracking::query(); }

        $count =$model->where([
            [$attribute , '=' , $value],
            ['id' , '<>' , $this->id] ,
            ])->count();
    return $count == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */

    public function message()
    {
        if($this->attr=='username'){
           return 'این نام کاربری قبلا در سیستم ثبت شده است.';
        }
        if($this->attr=='email'){
           return 'این ایمیل قبلا در سیستم ثبت شده است.';
        }
        if($this->attr=='tell'){
           return 'این شماره تلفن قبلا در سیستم ثبت شده است.';
        }
        if($this->attr=='codetracking'){
           return 'این شماره پیگیری قبلا در سیستم ثبت شده است.';
        }

    }
}
