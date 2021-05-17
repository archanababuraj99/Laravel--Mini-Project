<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
class RegisterController extends Controller
{
    public function RegisterCustomer(Request $req)
    { 
        
        $getCName=$req->cname;
        $getCUame=$req->cusername;
        $getCMob=$req->cmobile;
        $getCEmail=$req->cemail;
        $getCity=$req->city;
        $getStreet=$req->street;
        $getCPass=$req->cpassword;
        $getConpass=$req->confirm_password;
      

        if(isset($_POST["save"]))
        {
            $inQ=CustomerModel::InsertData($getCName,$getCUame,$getCMob,$getCEmail,$getCity,$getStreet,$getCPass,$getConpass);
            return redirect('/clogin');
        }
       


      
    }
}
