<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class LoginModel extends Model
{
    //use HasFactory;

    public static function LogData($un,$pw)
    {
        $sel=DB::table('customer_models')->where(['cusername'=>$un,'cpassword'=>$pw])->get();
        return $sel;

      
    }
}
