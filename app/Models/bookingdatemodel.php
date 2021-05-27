<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class bookingdatemodel extends Model
{
    public static function GridView($fDate,$eDate)
    {
       

$s=1;
        $data=DB::table('tbl_bookimg')
         
        ->join('tbl_event','tbl_event.e_id','=','tbl_bookimg.e_id')
        ->join('customer_models','customer_models.C_id','=','tbl_bookimg.Cus_id')
        ->whereBetween('date', [$fDate, $eDate])
        ->where('tbl_bookimg.Status','=',1)
        ->select('*')

        ->get();
    
return $data;



    }


   


}
