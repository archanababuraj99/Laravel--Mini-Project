<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MyprofileModel;

class MyProfileController extends Controller
{
    public function Profile(Request $req)
    {
        $un=$req->session()->get('username');
        $ci=$req->session()->get('Cid');
        $cdata=MyprofileModel::ViewData($un,$ci);

      
        return view('Customer/myprofile',['uname'=>$un,'cid'=>$ci,'cdata'=>$cdata]);
      
    }
    public function UpdateData(Request $req)
    {
       
        $getCName=$req->cname;
    
        $getCMob=$req->cmobile;
        $getCEmail=$req->cemail;
        $getCity=$req->city;
        $getStreet=$req->street;

        $ci=$req->session()->get('Cid');

        if(isset($_POST["btnupdate"]))
        {
            $upQ=MyprofileModel::UpdateData($ci,$getCName,$getCMob,$getCEmail,$getCity,$getStreet);
            return redirect('Customer/myprofile');
        }

    }
}
