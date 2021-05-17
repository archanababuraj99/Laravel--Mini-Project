<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;


class bookingmodel extends Model
{
    public static function InsApp($Cus_id,$e_id,$mob,$E_descrip,$No_of_members,$Status,$email,$date,$venu)
    {
        $ins=DB::table('tbl_bookimg')->insert(['Cus_id'=>$Cus_id,'e_id'=>$e_id,'mob'=>$mob,'E_descrip'=>$E_descrip,'No_of_members'=>$No_of_members,'Status'=>$Status,'email'=>$email,'date'=>$date,'venu'=>$venu]);
        return $ins;
    }
}
