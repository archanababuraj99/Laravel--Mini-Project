<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\viewapprovedbookingmodel;

class viewapprovedbookingcontroller extends Controller
{
    public function Viewbooking(Request $req)
    {
      
     
      

        $sta1=viewapprovedbookingmodel::GridView();


       



        return view('Admin/approvebooking',['booking'=>$sta1]);
       }

       

        }