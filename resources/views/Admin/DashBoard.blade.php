


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-info bg-light">
  <div class="container-fluid">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbNreGBrHJnDSzXUFErHhwLXPUH25vVWPD3g&usqp=CAU" alt="" width="90" height="80" class="d-inline-block align-top">
    <a class="navbar-brand" href="#">&nbsp;Admin Dashboard</a>
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

<div class="row">
<div class="col">
<br>
<br>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" class="btn btn-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
  Cash 96.67
</button>
<button type="button" class="btn btn-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
 Visitors 90
</button>
<button type="button" class="btn btn-info" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
  Rating 4.5
</button>
<br>
<br>
<br>
<br>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg_j7nU42wAMj4Ern_YY-qirz9gPdwJsJ3CQ&usqp=CAU" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJZwTrci2R8MofsjS0-D_Qr7INcgG83O1YlA&usqp=CAU" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0TWySORhTN0rL75vuN4PFtSeh2g9l4EJpaQ&usqp=CAU" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>
</div>



<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<br>
<br>
<br>
<br>
<br>
<div class="card" style="width: 18rem;">
 <img src="data:image/png;base64,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" class="card-img-top" alt="...">
 </div>
  <br>
<br>
<br>
  <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
</div>
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
<div class="container">
  <div class="row g-2">
    <div class="col-6">
      <div class="p-3 border bg-light"><div class="spinner-border" role="status">
  <span class="visually-hidden"></span>
</div>42%</div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light"><div class="spinner-border" role="status">
  <span class="visually-hidden"></span>
</div>Over 9k</div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light">PLAN IT</div>
    </div>
    <div class="col-6">
      <div class="p-3 border bg-light">Over India</div>
    </div>
  </div>
</div>

</div>
</div>





</div>

<br>
<br>
<br>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>