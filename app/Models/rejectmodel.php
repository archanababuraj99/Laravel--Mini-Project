<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class rejectmodel extends Model
{
 


    public static function reject($st,$rid)
    {
        $ins=DB::table('tbl_bookimg')->where('B_id','=',$rid)->update(['Status'=>2,'rejectreason'=>$st]);
        return $ins;
    }





}
