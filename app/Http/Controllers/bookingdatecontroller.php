<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bookingdatemodel;

class bookingdatecontroller extends Controller
{
    public function Viewbookingdate(Request $req)
    {

        if(isset($_POST["btnsave"]))
        {

                  
        $fdate=$req->inputefdate;
        $edate=$req->inputesdate;
        $sta1=bookingdatemodel::GridView($fdate,$edate);



         return view('Admin/ViewBookingDateWise',['booking'=>$sta1,'fdate'=>$fdate,'edate'=>$edate]);

       }

       

    }
}