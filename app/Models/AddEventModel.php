<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class AddEventModel extends Model
{
    public static function EventData($en,$ep,$edes,$photo)
    {
        $ins=DB::table('tbl_event')->insert(['e_name'=>$en,'e_price'=>$ep,'e_desc'=>$edes,'e_image'=>$photo]);
        return $ins;
    }
    public static function GridView()
    {
        $st=DB::table('tbl_event')->get();
        return $st;
    }

    public static function DelData($did)
    {
        $del=DB::table('tbl_event')->where(['e_id'=>$did])->delete();
        return $del;
    }

}
