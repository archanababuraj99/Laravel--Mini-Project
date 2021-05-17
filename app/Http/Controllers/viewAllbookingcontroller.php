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
          
        }
        else if(isset($_GET["rid"]))
        {
        
          $s=2;
         $rid=$_GET["rid"];
        
             $upQ=viewAllbookingmodel::UpDataR($s,$rid);
            
         
         }




        return view('Admin/viewallbooking',['booking'=>$sta1]);
       }

       

        }