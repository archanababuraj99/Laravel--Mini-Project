@extends("Customer/theme1")
@section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>


<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<div class="card" style="width: 18rem;">
<form class="row g-3" method="post">
{{ csrf_field() }}
  <img src="data:image/png;base64,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" class="card-img-top" alt="...">
  <div class="card-body">
   <strong> <h5 class="card-title">Booked Successfully</h5></strong>
    
  </div>

  <div class="card-body">

      </div>
</div>
</div>


<!--   
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"> -->
<h1>Your Booking</h1>
<br>
<br>
<br>


<table class="table table-bordered" style="width:100%;">
<tr>
 <th>Booking id</th>
 <th>Event Name</th>
 <th>Venue</th>
 <th>Date</th>
 <th>No of Members</th>
 <th>Status</th>

</tr>
 <tr>
                <?php
                    if(isset($booking))
                    $i=0;
                    {
                        foreach($booking as $st1)
                        {

                            $i++;

                ?>
                 <td><?php echo $st1->B_id ;?></td>
                <td><?php echo $st1->e_name;?></td>
                <td><?php echo $st1->venu;?></td>
                <td><?php echo $st1->date;?></td>
                <td><?php echo $st1->No_of_members;?></td>
                <!-- <td><?php //echo $st1->Status;?><h5 style="color:red;">Booking Confirmation Pending<h5></td> -->
                <td><?php if($st1->Status=='1'){?><h4 style="color:green;">Booking Approved</h4><?php }else if($st1->Status=='2'){?><h4 style="color:red;">Booking Rejected</h4><?php }else { ?><h4 style="color:blue;">Booking Confirmation Pending</h4><?php } ?></td>
                
              
                
        </tr>

                <?php
                           }
                        }
    

                ?>


</table>

<!-- </div> -->

<div class="col col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
</div>
</div>









</div>
@endsection