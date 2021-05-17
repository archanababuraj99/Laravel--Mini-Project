<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\changemodel;

class changecontroller extends Controller
{
    public function PasswordChange(Request $req)
    {
        // $pid=$req->session()->get('patientid');
if(isset($_POST["btn"]))
        $op=$req->inputoldpass;
        $np=$req->inputnewpass;
        $cp=$req->inputconpass;

        $npw=changemodel::PassWord($op,$np,$cp);
        return redirect('/clogin');

    }
}
