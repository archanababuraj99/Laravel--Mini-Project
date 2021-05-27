@extends("Customer/theme1")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<br>
<br>
<br>
<br>
<?php
                        if(isset($event))
                        {
                          $ename=$event;
                        }
                              ?>

<p><em><strong>Enter the essentials.</em></p></strong>
<form class="row g-3" method="post">

{{ csrf_field() }}

  <div class="col-md-6">
    <label for="inputename4" class="form-label">Event Name</label>
    <input type="text" class="form-control" name= "inputename4"  value="<?php  if(isset($ename)){ echo $ename; }?>">
    <input type="hidden" class="form-control" name="eid" value="<?php  if(isset($eid)){ echo $eid; }?>">
  </div>
  <div class="col-md-6">
    <label for="inputmembers4" class="form-label">No of Members</label>
    <input type="text" class="form-control" name="inputmembers4" id="inputmembers4">
  </div>

  <div class="col-12">
    <label for="inputvenue" class="form-label">Venue</label>
    <input type="text" class="form-control" name="inputvenue" id="inputvenue">
  </div>

  <div class="col-12">
    <label for="inputemail" class="form-label">Email</label>
    <input type="Email" class="form-control" name="inputemail" placeholder="example.gmail.com">
  </div>

  <div class="col-12">
    <label for="inputedes" class="form-label">Event Description</label>
    <div class="form-floating">
  <textarea class="form-control" name="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Description</label>
</div>
  </div>

  <div class="col-12">
    <label for="inputedate" class="form-label">Event Date</label>
    <input type="date" class="form-control" name="inputedate" id="inputedate" min="<?php echo date('Y-m-d')?>">
  </div>


  <div class="col-12">
    <label for="inputmob" class="form-label">Mobile No</label>
    <input type="text" class="form-control" name="inputmob" id="inputmob">
  </div>
 

  <div class="col-12">
  <center><button class="btn btn-info" type="submit" name="btn" id="btn">BookNow</button></center>
  <a href="booking">Cancel</a>
  </div>

</form>
</div>

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
</div>




</div>
<br>
<br>
<br>
<br>
@endsection