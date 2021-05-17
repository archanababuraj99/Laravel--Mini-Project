<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class viewbookingmodel extends Model
{
    public static function GridView($cid,$s=null)
    {
       

$s=0;
        $data=DB::table('tbl_bookimg')
         
        ->join('tbl_event','tbl_event.e_id','=','tbl_bookimg.e_id')
        ->join('customer_models','customer_models.C_id','=','tbl_bookimg.Cus_id')
    
        ->where('tbl_bookimg.Cus_id','=',$cid,'and','tbl_bookimg.Status','=',$s)
        ->select('*')

        ->get();
    
return $data;



    }
}
