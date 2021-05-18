<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AddEventModel;

class AddEventController extends Controller
{
    
    public function InsertEvent(Request $req)
    {
        $ename=$req->inputename4;
        $edes=$req->inputdes4;
        $erate=$req->inputrate;
       
        $photo=$req->cfile;
        $destination=base_path().'/resources/views/Images';
        $photo->move($destination,$photo->getClientOriginalName());

        if(isset($_POST["btnsave"]))
        

            $insert=AddEventModel::EventData($ename,$erate,$edes,$photo);
       
            return  redirect('Admin/addevent');

     
       
    }


    
    public function ViewEvent(Request $req)
    {
        // if(isset($_GET["editid"]))
        // $edid=$_GET["editid"];

        // $edt=CategoryModel::EditCategory($edid);
        //     foreach($edt as $ed)
        //     {
        //         $edst=$ed->category_name;
        //     }
      

        $sta=AddEventModel::GridView();
        return view('Admin/addevent',['event'=>$sta]);
    }
    public function DeleteEvent($did)
        {
            $delt=AddEventModel::DelData($did);
            return redirect('Admin/addevent');
        }
}
