<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class viewEventModel extends Model
{
    public static function DropData()
    {
        $st=DB::table('tbl_event')->get();
        return $st;
    }


 


    public static function GridView($id)
    {

       
        $st=DB::table('tbl_event')->where(['e_id'=>$id])->get();
        return $st;
       
    }




}
