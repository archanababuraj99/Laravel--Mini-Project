<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class LoginController extends Controller
{
    public function CustomerLog(Request $req,$pid=null,$un=null)
    {
       
        $un=$req->txtusername;
        $pw=$req->txtpassword;

        $log=LoginModel::LogData($un,$pw);

        if(count($log)>0)
        {


foreach($log as $row)
{
    $pid=$row->C_id;
    $un=$row->cusername;
}

            $req->session()->put('username',$un);
            $req->session()->put('Cid',$pid);
            return redirect("Customer/myprofile");
        }
      
        else
        {
            //echo "<script> alert ('Invalid')</script>";
            ?>
            <script type="text/javascript">
            alert("Invalid User..");
            setTimeout(function(){window.location.href='/clogin'},100);
        </script>
<?php
        }
    }
 
        public function logout(Request $req)
        {
            $req->session()->forget('username');
            return redirect('/clogin');
        }
        
    



}
