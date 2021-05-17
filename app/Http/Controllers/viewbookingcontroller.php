<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\viewbookingmodel;

class viewbookingcontroller extends Controller
{
    public function Viewbooking(Request $req,$ci=null)
    {
      
     
        $ci=$req->session()->get('Cid');

        $sta1=viewbookingmodel::GridView($ci);
        return view('Customer/viewcbooking',['ci'=>$ci,'booking'=>$sta1]);
       }

    }

