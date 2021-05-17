<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class adminlogin extends Model
{
    //use HasFactory;

    public static function LogData($un,$pw)
    {
       

        $sel2=DB::table('tbl_admin')->where(['admin_uname'=>$un,'admin_password'=>$pw])->get();
        return $sel2;
    }
}
