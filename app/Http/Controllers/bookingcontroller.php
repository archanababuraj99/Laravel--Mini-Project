<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\bookingmodel;
class bookingcontroller extends Controller
{
    public function ApptIns(Request $req)
    {

        $cid=session()->get('Cid');


        $eid=$req->eid;
        $ename=$req->inputename4;
        $emember=$req->inputmembers4;
        $venue=$req->inputvenue;
        $email=$req->inputemail;
      
        $desc=$req->floatingTextarea2;
        $date=$req->inputedate;
        $ph=$req->inputmob;


        $sta=0;


      if(isset($_POST["btn"]))
      {
          $apins=bookingmodel::InsApp($cid,$eid,$ph,$desc,$emember,$sta,$email,$date,$venue);

          return redirect('Customer/viewcbooking');
      }

    }
}
