@extends("Customer/theme1")
@section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<br>
<br>
<?php
if(isset($uname))
{
    echo "<h2 style='color:blue'>Welcome ".$uname ."</h2>";
}
?> 
<br>
<br>
<br>

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
   <strong>Actions</strong>
  </a>
  <a href="myprofile" class="list-group-item list-group-item-action">My Profile</a>
  <a href="changepassword" class="list-group-item list-group-item-action">Change Password</a>
  <a href="booking" class="list-group-item list-group-item-action">Bookings and Events</a>
 
</div>
</div>


<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
</div>

<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
                if(isset($cdata))
                {
                    foreach($cdata as $data)
                    {

                


            ?>

<p><em><strong>Update your details.</em></p></strong>
<form class="row g-3" method="post">
{{ csrf_field() }}
  <div class="col-md-6">
    <label for="inputname4" class="form-label">Name</label>
    <input type="text" name="cname" class="form-control" id="inputname4" value="<?php echo $data->cname;?>">
  </div>
 
  <div class="col-12">
    <label for="inputemail" class="form-label">Email</label>
    <input type="Email" name="cemail" class="form-control" id="inputemail" placeholder="example.gmail.com"  value="<?php echo $data->cemail;?>">
  </div>
  <div class="col-12">
    <label for="inputmob" class="form-label">Mobile No</label>
    <input type="text" name="cmobile" class="form-control" id="inputmob"  value="<?php echo $data->cmobile;?>">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="inputCity"  value="<?php echo $data->city;?>">
  </div>
  <div class="col-md-6">
    <label for="inputstreet" class="form-label">Street</label>
    <input type="text" name="street" class="form-control" id="inputstreet"  value="<?php echo $data->street;?>">
  </div>


  <div class="col-12">
    <button type="submit" name="btnupdate" class="btn btn-primary">Update</button>
    <button type="cancel" class="btn btn-primary">Cancel</button>
  </div>

</form>

<?php

}
}

?>
</div>





</div>
@endsection
