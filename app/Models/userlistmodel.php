<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class userlistmodel extends Model
{
    public static function GridView($s=null)
    {
       


        $data=DB::table('customer_models')
         

        ->select('*')

        ->get();
    
return $data;



    }






}
