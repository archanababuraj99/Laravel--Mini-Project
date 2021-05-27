<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script type="text/javascript">

function PrintDiv() {
    var divToPrint = document.getElementById('printarea');
    var popupWin = window.open('', '_blank', 'width=300,height=400,location=no,left=200px');
    popupWin.document.open();
    popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
    popupWin.document.close();
}
</script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-info bg-light">
  <div class="container-fluid">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbNreGBrHJnDSzXUFErHhwLXPUH25vVWPD3g&usqp=CAU" alt="" width="90" height="80" class="d-inline-block align-top">
    <a class="navbar-brand" href="admindash">&nbsp;Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="addevent">Add Event</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Actions
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="viewallbooking">New Report</a></li>
            <li><a class="dropdown-item" href="approvebooking">Approved Booking</a></li>
            <li><a class="dropdown-item" href="ViewBookingDateWise">Datewise Booking</a></li>
            <li><a class="dropdown-item" href="viewallusers">Customer Report</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/alogin">Log Out</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">

<div id="printarea">
<br><br>
<br>
<h1 >Users Report</h1>
<br>
<br>
<br>
<table class="table table-hover table-dark table-striped " border="1"  style="width:100%">
<tr>
 <th>Customer ID</th>
 <th>Customer Name</th>
 <th>Email</th>
 <th>Mobile No</th>
 <th>Street</th>
 <th>City</th>
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
                 <td><?php echo $st1->C_id;?></td>
                 <td><?php echo $st1->cname;?></td>
                 <td><?php echo $st1->cemail;?></td>
                <td><?php echo $st1->cmobile;?></td>
            
                <td><?php echo $st1->street;?></td>
                <td><?php echo $st1->city;?></td>
           
               
              
                
        </tr>

                <?php
                           }
                        }
    

                ?>

 
 
 
 
</table>
</div>
<button class="btn btn-danger"  type="button" onclick="PrintDiv()" id="btnPrintbtn" Text="Print"/ >Download to pdf</button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>