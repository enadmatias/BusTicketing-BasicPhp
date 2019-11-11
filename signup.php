<?php
include('header.php');
?>
<style>
#form{
    margin-top:50px;
}
#carousel{
    margin-left:50px;
}
body{
  background-image:url('9.jpg');
  background-attachment:fixed;
  background-repeat: no-repeat;
  background-size:cover;
}
</style>
<body>
<div class="d-flex align-items-center">
<div class="d-flex justify-content-start">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner" id="carousel">
    <div class="carousel-item active">
      <img src="butterfly.jpg" width="800" height="500">
    </div>
    <div class="carousel-item">
      <img src="city.jpg"width="800" height="500">
    </div>
    <div class="carousel-item">
      <img src="sunset.jpg" width="800" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
 <form action="registerprocess.php" method="POST" style="width:300px;margin:auto;">
 <div class="d-flex justify-content-end">
 <div class="form-control" id="form">
 <div>
 <h2 class="container container-fluid">Sign up</h2>
 </div>
  <div class="form-group">
    <label >Fullname</label>
    <input type="text" class="form-control" name="fname" required>
  </div>
  <div class="form-group">
    <label >Address</label>
    <input type="text" class="form-control" name="address" required>
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text" class="form-control" name="email" required>
  </div>
  <div class="form-group">
    <label >Contact No</label>
    <input type="text" class="form-control" name="cntNo" required>
  </div>
  <div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control" name="username" required>
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  <div class="form-group">
    <label >Confirm Password</label>
    <input type="password" class="form-control" name="conpassword" required>
  </div>
  <button type="submit" class="btn btn-info" style="width:275px" name="btnReg">Register</button>
  </div>
  </div>
</form> 

</div>
<?php
include('footer.php');
?>