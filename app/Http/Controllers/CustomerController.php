<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Guest/cregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getCName=request("cname");
        $getCUame=request("cusername");
        $getCMob=request("cmobile");
        $getCEmail=request("cemail");
        $getCity=request("city");
        $getStreet=request("street");
        $getCPass=request("cpassword");
        $getConpass=request("confirm_password");


     $log=CustomerModel::CheckData($getCUame);
     if(count($log)>0)
     {
         ?>
           <script type="text/javascript">
                            alert("User name already  exist..");
                            setTimeout(function(){window.location.href='/clogin'},100);
                        </script>
                       
                       
                       
         <?php

     }
     else{
     
        if($getCPass==$getConpass)
                    {
                        
                       $log=CustomerModel::InsertData($getCName,$getCUame,$getCMob,$getCEmail,$getCity,$getStreet,$getCPass,$getConpass);
                      
                    
                        ?>
                        <script type="text/javascript">
                            alert("Registration Successfull..");
                            setTimeout(function(){window.location.href='/clogin'},100);
                        </script>
                    <?php
                     }else{
                        ?>
                        <script type="text/javascript">
                        alert("Confirm Password Mismatch..");
                        setTimeout(function(){window.location.href='/cregister'},100);
                    </script>
                     <?php
                    }
         
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
