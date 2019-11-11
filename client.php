<?php
include('header.php');
session_start();
if (!isset($_SESSION['client'])) {
	header("location:home.php");
}

   

?>
<style>

.navbar{
    width:900px;
    margin-left:250px; 
}
.table{

    width:900px;
    margin-left:125px; 
}
.jumbotron{
    width:900px;
    margin-left:250px;
}
#btnFind{
    margin-left:750px;
}

</style>
<body>
<nav class="navbar navbar-expand-lg w3-theme-l1">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav text-dark">
      <li class="nav-item active">
        <a class="nav-link w3-padding" href="home.php" style="font-size:18px" >Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link w3-border-right w3-border-left w3-border-light w3-padding" href="#" style="font-size:18px">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link w3-padding" href="#" style="font-size:18px">Contact</a>
      </li>
    </ul>
  </div>
  
  <div class="dropdown">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" id="account">
    <?php echo"".$_SESSION['client']."";?>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Edit Password</a>
    <a class="dropdown-item" href="#">Change Password</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="logout.php" id="logout">Log out</a>
  </div>
</div>
</nav>
<form action = "check.php">
<div class="jumbotron w3-container w3-border">
  <h2 class="text-center">Online Bus Express</h2>
  <button class="w3-button w3-round-xlarge w3-border" type="submit" id="btnFind">Find more</button>
</div>
</form>
<div class="container">
  <table class="table table-striped w3-border">
    <thead class="bg-secondary">
      <tr>
        <th>Bus No</th>
        <th>Bus Type</th>
        <th>Departure Time</th>
        <th>Destination</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <th>4520</th>
        <th>Air Conditioned</th>
        <th>10:00:00</th>
        <th>Carcar</th>
      </tr>
      <tr>
      <th>328</th>
        <th>Non Air Conditioned</th>
        <th>08:00:00</th>
        <th>Barili</th>
      </tr>
      <tr>
      <th>561</th>
        <th>Non Air Conditioned</th>
        <th>08:00:00</th>
        <th>Oslob</th>
      </tr>
      <th>2543</th>
        <th>Non Air Conditioned</th>
        <th>09:00:00</th>
        <th>Alcoy</th>
      </tr>
      <th>561</th>
        <th>Air Conditioned</th>
        <th>07:00:00</th>
        <th>Santander</th>
      </tr>
    </tbody>
  </table>
</div>
</div>
<form action="loginprocess.php" method = "POST">
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content">
      
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        

        <div class="modal-body">
        <div class="form-group">
        <label for="usr">UserName</label>
        <input type="text" class="form-control" name="usr" required>
              </div>
             <div class="form-group">
            <label for="pwd">Password</label>
         <input type="password" class="form-control" name="pwd" required>
           </div>
        </div>
    
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" id="login" name="btnLogin">Login</button>
        </div>
        
      </div>
    </div>
  </div>
  </form>


  



<?php
include('footer.php');
?>