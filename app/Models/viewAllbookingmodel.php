<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class viewAllbookingmodel extends Model
{
    public static function GridView($s=null)
    {
       

$s=0;
        $data=DB::table('tbl_bookimg')
         
        ->join('tbl_event','tbl_event.e_id','=','tbl_bookimg.e_id')
        ->join('customer_models','customer_models.C_id','=','tbl_bookimg.Cus_id')
    
        ->where('tbl_bookimg.Status','=',$s)
        ->select('*')

        ->get();
    
return $data;



    }


    public static function UpDataA($s,$aid)
    {
        $ins=DB::table('tbl_bookimg')->where('B_id','=',$aid)->update(['Status'=>$s]);
        return $ins;
    }

    public static function UpDataR($st,$rid)
    {
        $ins=DB::table('tbl_bookimg')->where('B_id','=',$rid)->update(['Status'=>$st]);
        return $ins;
    }





}
