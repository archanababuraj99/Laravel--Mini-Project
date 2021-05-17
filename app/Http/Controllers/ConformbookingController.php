<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conformbookingmodel;

class ConformbookingController extends Controller
{
    public function Mybooking(Request $req,$ci=null)
    {
       
        $ci=$req->session()->get('Cid');

        $sta1=Conformbookingmodel::GridView($ci);
   
   

       
       return view('Customer/confirmedbooking',['ci'=>$ci,'bb'=>$sta1]);

    }
}

