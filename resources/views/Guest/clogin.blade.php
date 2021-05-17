@extends("Guest/theme")
@section("content")

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       
  
  <style>
 .login-card-purple {
    background: linear-gradient(145deg, #673AB7, #9C27B0);
}

body {
    font-size: 13px;
}
h2.text-white, h2.text-danger
{
    font-size: 28px;
}
  </style>
                
    </head>
    <body>
       <br>
       <br>
       <br>
   <div class="container">
   
    <div class="row">
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
    
    </div>

        <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
           <center> <div class="login-card-purple p-3 shadow-lg rounded">
                <div class="pt-3">
                    <h2 class="text-white ">Sign In </h2>
                </div>
               <center> <form class="mt-5"  method="post"> 
               {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" 
                            class="form-control form-control-sm bg-light" 
                            placeholder="Username" name="txtusername">

                    </div>
                    <div class="form-group">
                        <input type="password" 
                            class="form-control form-control-sm bg-light" 
                            placeholder="Password" name="txtpassword">
                    </div>
                  
                    <div class="mt-5">
                        <button type="submit" class="btn btn-sm btn-light col" >
                            Login
                        </button>
                    </div>
                  
                    
                    <div class="mt-5">
                        <p class="text-white text-center">
                            Don't have an account?
                            <a href="/cregister" class="text-warning">Click here to register</a>
                        </p>
                    </div>
                </form></center>
            </div>
        </div></center>

        
        
     
        






















</div>
@endsection