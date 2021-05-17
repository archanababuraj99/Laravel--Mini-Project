<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class CustomerModel extends Model
{
    //use HasFactory;

    public static function CheckData($un)
    {
        $sel=DB::table('customer_models')->where(['cusername'=>$un])->get();
        return $sel;
    }

    // public static function InsertData($getCName,$getCUame,$getCMob,$getCEmail,$getCity,$getStreet,$getCPass,$getConpass)
    // {
    //     $ins=DB::table('customer_models')->insert(['cname'=>$getCName,'cusername'=> $getCUame,'cmobile'=> $getCMob,'cemail'=>$getCEmail,'city'=>$getCity,'street'=>$getStreet,'cpassword'=>$getCPass,'confirm_password'=>$getConpass]);
    //     return $ins;
    // }
}
