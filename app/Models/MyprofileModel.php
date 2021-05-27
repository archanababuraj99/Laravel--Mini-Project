<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class MyprofileModel extends Model
{
    public static function ViewData($un,$ci)
    {
        $data=DB::table('customer_models')->where(["cusername"=>$un,"C_id"=>$ci])->get();
        return $data;
    }
      public static function UpdateData($cid,$getCName,$getCMob,$getCEmail,$getCity,$getStreet)
    {
        $ins=DB::table('customer_models')->where(["C_id"=>$cid])
        ->update(['cname'=>$getCName,'cmobile'=> $getCMob,'cemail'=>$getCEmail,'city'=>$getCity,'street'=>$getStreet]);
        return $ins;
    }
}
