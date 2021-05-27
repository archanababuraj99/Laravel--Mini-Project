<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\viewAllbookingmodel;

class viewAllbookingcontroller extends Controller
{
    public function Viewbookingnew(Request $req,$s=null,$aid=null,$rid=null)
    {
      
     
      

        $sta1=viewAllbookingmodel::GridView();


        if(isset($_GET["aid"]))
        {
         $s=1;
        $aid=$_GET["aid"];
       
            $upQ=viewAllbookingmodel::UpDataA($s,$aid);
            return redirect('Admin/viewallbooking');

      
        }
       if(isset($_GET["rid"]))
        {
         
            if(isset($_GET["rid"])){
                $rid=$_GET["rid"];}
        
            
        return view('Admin/Rejectstatus',['rd'=> $rid]);
         
         }


         return view('Admin/viewallbooking',['booking'=>$sta1]);

       }

       

        }