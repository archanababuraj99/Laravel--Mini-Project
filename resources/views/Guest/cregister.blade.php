@extends("Guest/theme")
@section("content")




<style>
	body {
		color: #fff;
		background: #FFFFFF;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: none;
	}
	.form-control:focus{
		background: #e2e2e2;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 390px;
		margin: 30px auto;
	}
	.signup-form form{
		color: #FFFFFF;
		border-radius: 3px;
    	margin-bottom: 15px;
        background:	  #a842c9;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #FFFFFF;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }    
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #3598dc;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: #2389cd !important;
        outline: none;
	}
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
	.signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #FFFFFF;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}
    .signup-form .hint-text {
		padding-bottom: 15px;
		text-align: center;
    }
</style>

<div class="signup-form">
    <form method="post">
	{{ csrf_field() }}


		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>

        <div class="form-group">
			<div class="row">
				<div class="col-xs-6"><input type="text" class="form-control" required name="cname" placeholder=" Name" required="required"></div><br>
	
			</div>        	
        </div>

        <div class="form-group">
        	<input type="text" class="form-control" name="cusername" placeholder="Username" required="required">
        </div>

        <div class="form-group">
        	<input type="text" class="form-control" name="cmobile" placeholder="Contact No" required="required">
        </div>

        <div class="form-group">
        	<input type="email" class="form-control" name="cemail" placeholder="Email" required="required">
        </div>

		<div class="form-group">
        	<input type="text" class="form-control" name="city" placeholder="City" required="required">
        </div>

		<div class="form-group">
        	<input type="text" class="form-control" name="street" placeholder="Street" required="required">
        </div>

		<div class="form-group">
            <input type="password" class="form-control" name="cpassword" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
        </div>        
        
		<div class="form-group">
        <button type="submit" name="save" class="btn btn-primary btn-lg">Register</button>
        </div>
    </form>
	
</div>


@endsection
