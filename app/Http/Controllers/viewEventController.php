<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\viewEventModel;

class viewEventController extends Controller
{  
    
    public function EventData()
    {
        $sta=viewEventModel::DropData();
        
        return view('Customer/booking',['event'=>$sta]);
    }

 
    public function EData()
    {
        $sta=viewEventModel::DropData();
        return $sta;
       
    }

    public function View(Request $req)
    {
      
     
       if(isset($_POST["btn"]))
       {
         $ddl=$req->ddl;

        $st=$this->EData();

        $sta1=viewEventModel::GridView($ddl);
        return view('Customer/booking',['sc'=>$sta1,'event'=>$st]);
       }

    }

    public function ViewData($eventname=null,$eid=null)
    {
       if(isset($_GET["ename"])) $eventname=$_GET["ename"];
       if(isset($_GET["eid"])) $eid=$_GET["eid"];
        
        return view('Customer/bookpage',['event'=>$eventname,'eid'=>$eid]);
    }




}
