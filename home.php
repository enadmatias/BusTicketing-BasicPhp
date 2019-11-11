<?php
include('header.php');
session_start();
if(isset($_SESSION['client'])) {
  header("location:client.php");
}
?>
<style>

.navbar{
    width:900px;
    margin-left:225px; 
    margin-bottom: 150px;
}
.table{
  margin-top: -90px;
    width:900px;
}

#btnFind{
    margin-left:750px;
}
#account{
   display:none;
}
#btnLogin{
   font-size: 13px;
}
.card{
   margin-left:90px; 
   margin-top: 50px;
}
@font-face {
/* download clock font: http://bootstraptema.ru/stuff/0-0-0-2478-20 */  
font-family:"alarm clock";
src:url("alarm_clock.eot?") format("eot"),
url("alarm_clock.woff") format("woff"),
url("alarm_clock.ttf") format("truetype"),
url("alarm_clock.svg#alarmclock") format("svg");
font-weight:normal;
font-style:normal;
}
.clock{
  margin-left:250px;
  margin-top: -30px;
}
</style>
<body>
  <div class= "row">
<nav class="navbar navbar-expand-lg w3-theme-l1 fixed-top scrolling-navbar">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav text-dark">
      <li class="nav-item active">
        <a class="nav-link w3-padding" href="home.php" style="font-size:18px" >Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link w3-border-right w3-border-left w3-border-light w3-padding" href="#" style="font-size:18px">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link w3-padding" href="#" style="font-size:18px">Contact</a>
      </li>
    </ul>
  </div>
  <button id="btnLogin" data-toggle="modal" data-target="#modalLRForm" class="btn btn-outline-primary text-white btn-rounded">Login&nbsp;<i class="fas fa-sign-in-alt"></i></button>
</div>
</nav></div>
  <div class="container w3-container">
  <div class="row mb-5 mt-5">
    <div class="col-md-12 w3-margin">
         <div class="card card-image" style="background-image: url(road.jpg);width: 900px;height: 750px;">
  <h2 class="text-center heading mb-2 display-4  ">Online Bus Express</h2>
  

<div class="col-md-4 clock">
<div class="card bg-primary text-white align">
  <a class="card-title text-center">
<div class="d-flex flex-wrap justify-content-center mt-2">
<a><span class="mr-1">Hours</span></a>:
<a><span class="ml-2">Min</span></a>:
<a><span class="ml-2">Sec</span></a>
</div>
</a>
<h3 class="card-title text-center">
<div class="d-flex flex-wrap justify-content-center mt-2">
<a><span class="badge hours bg-success ml-2"></span></a> :
<a><span class="badge min bg-success"></span></a> :
<a><span class="badge sec bg-success"></span></a>
</div>
</h3>
</div>
</div>


  <table class="table table-striped w3-border">
    <thead class="bg-secondary text-white" >
      <tr>
        <th>Bus No</th>
        <th>Bus Type</th>
        <th>Departure Time</th>
        <th>Destination</th>
      </tr>
    </thead>
    <tbody class="text-dark">
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
 <a class="btn btn-outline-white btn-rounded text-dark" href="check.php" id="btnFind">Find more</a>

</div>
</div>
</div>
</div>
<form action="loginprocess.php" method = "POST">
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-user-circle prefix"></i>
                                <input type="text" id="modalLRInput10" class="form-control form-control-sm validate" name="usr" placeholder="Your Username">
                                
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="pwd" placeholder="Your password">
                              
                            </div>
                            <div class="text-center mt-2">
                                <button type ="submit" class="btn btn-info" name="btnLogin">Log in <i class="fas fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">

                        <!--Body-->
                         <div class="modal-body">
                            <div class="md-form form-sm mb-5">
                               <i class="fa fa-user-alt prefix"></i>
                                 <input type="text" id="modalLRInput12" class="form-control form-control-sm validate" name="fullname" placeholder="Enter your fullname">
                              
                            </div>

                              <div class="md-form form-sm mb-5">
                                <i class="fa fa-map-marker-alt prefix"></i>
                                <input type="text" id="modalLRInput12" class="form-control form-control-sm validate" name="address" placeholder="Enter your Current address">
                               
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate"  name="email" placeholder="Enter valid email">
                                
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-phone prefix"></i>
                                <input type="text" id="modalLRInput12" class="form-control form-control-sm validate" name="phone" placeholder="Enter Activated phone number">
                               
                            </div>
                              <div class="md-form form-sm mb-5">
                                <i class="fa fa-user-circle prefix"></i>
                                <input type="text" id="modalLRInput12" class="form-control form-control-sm validate" name="usr" placeholder="Enter Desired username">
                               
                            </div>


                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="pwd" placeholder="Enter password">
                             
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate"  name="cpwd" placeholder="Confirm password">
                             
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button type ="submit" class="btn btn-info" name="btnSignUp">Sign up <i class="fab fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->



</form>


<?php
include('footer.php');
?>