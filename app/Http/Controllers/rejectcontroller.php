<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\rejectmodel;

class rejectcontroller extends Controller
{
    public function rejectupdate(Request $req)
    {

    $eid=$req->rid;
    $ename=$req->inputdes4;


   


  if(isset($_POST["btnreject"]))
  {
      $apins=rejectmodel::reject($ename,$eid);

      return redirect('Admin/viewallbooking');
  }
       

}
      

}