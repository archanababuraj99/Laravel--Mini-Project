<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userlistmodel;

class userlistcontroller extends Controller
{
    public function User(Request $req)
    {
      
     
      

        $sta1=userlistmodel::GridView();


       



        return view('Admin/viewallusers',['booking'=>$sta1]);
       }

       

        }