@extends("Customer/theme1")
@section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

<br>
<br>
<br>
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

<p><em><strong>Change your password.</em></p></strong>
<form class="row g-3" method="post">
{{ csrf_field() }}
  <div class="col-12">
    <label for="inputoldpass" class="form-label">Old Password</label>
    <input type="password" class="form-control" name="inputoldpass">
  </div>
  <div class="col-12">
    <label for="inputnewpass" class="form-label">New Password</label>
    <input type="password" class="form-control" name="inputnewpass" >
  </div>

  <div class="col-12">
    <label for="inputconpass" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" name="inputconpass" >
  </div>

 


  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="btn">Confirm</button>
    <button type="cancel" class="btn btn-primary">Cancel</button>
  </div>

</form>
</div>





</div>
@endsection
