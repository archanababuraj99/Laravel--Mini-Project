<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class changemodel extends Model
{
    public static function PassWord($opw,$npw,$cpw)
    {
        $pw=DB::table('customer_models')->where('cpassword','=',$opw)->update(['cpassword'=>$npw,'confirm_password'=>$cpw]);
        return $pw;
    }
}
