<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminlogin;

class adminlogincontroller extends Controller
{
    public function Adminlogin(Request $req)
    {
       
        $un=$req->txtusername;
        $pw=$req->txtpassword;

        $log=adminlogin::LogData($un,$pw);

        if(count($log)>0)
        {
            $req->session()->put('admin_uname',$un);
            
            return redirect("Admin/admindash");
        }
      
        else
        {
            //echo "<script> alert ('Invalid')</script>";
            ?>
            <script type="text/javascript">
            alert("Invalid User..");
            setTimeout(function(){window.location.href='/alogin'},100);
        </script>
<?php
        }
    }
 
        public function logout(Request $req)
        {
            $req->session()->forget('admin_uname');
            return redirect('/alogin');
        }
        
    



}
