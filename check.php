<?php
include('header.php');
session_start(); 
?>
<style>
.nav{
    width:900px;
    margin-left:250px; 
}
#pad{
    padding:150px;
    height:500px;
}
h2{
    margin-top:-80px;
}
a{
    font-size:18px;
}
.org{
    margin-right:60px;
}
.btnCheck{
   margin-left:305px;
   margin-top:-100px;

}
.radio{
  margin-left:60px;
  margin-bottom:20px;
}


</style>
<body>
<ul class="nav nav-tabs bg-secondary">
  <li class="nav-item">
    <a class="nav-link active text-dark">Search</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-light">Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-light">Payment</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-light">Confirmation</a>
  </li>
</ul>
<div class="w3-container w3-display-left">
<ul class="nav nav-tabs bg-secondary text-light" id="pad">
<div>
<h2>Find your Destination</h2>
</div>

 <form class="form-inline" action="cart.php" method="POST"> 
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio" name="rdoBtnOneway" value="customEx" >
    <label class="custom-control-label" for="customRadio">One Way</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="rdoBtnRoundTrip" value="customEx" checked="checked">
    <label class="custom-control-label" for="customRadio2">Round Trip</label>
  </div> 

<div class="w3-container form-inline mt-5">
       <div class="org">
      <select name="origin" class="custom-select mb-3" style="width:250px">
      <option selected>From</option>
      <option value="Carcar">Carcar</option>
      <option value="Barili">Barili</option>
      <option value="Sibonga">Sibonga</option>
    </select>

        </div>      
        <div class="des">
      <select name="destination" class="custom-select mb-3" style="width:250px">
      <option selected>To</option>
      <option value="Carcar">Carcar</option>
      <option value="Barili">Barili</option>
      <option value="Sibonga">Sibonga</option>
      <option value="Sibonga">Cebu</option>
    </select>
         </div>
        

  <div class="row mb-5">
                  <div class="col-sm mt-5">
                    <div class="form-group">
                      <div class="probootstrap-date-wrap">
                        <span class="icon ion-calendar"></span> 
                        <input type="text"  class="form-control" placeholder="Departure" id="datepicker1" name="depart" type="text" value="" onfocus="this.value = '';"  required="">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-8 mt-5">
                    <div class="form-group">
                      <div class="probootstrap-date-wrap">
                        <span class="icon ion-calendar" id="icon"></span> 
                        <input type="text"  class="form-control" placeholder="Arrival"  id="datepicker2" name="arrive" type="text" value="" onfocus="this.value = '';" >
                      </div>
                    </div>
                  </div>
            


        <div class="btnCheck col-sm-6">
         <button type="submit" class="btn btn-info" style="width:250px" name="btnAvail">Check Availability</button>
         </div>
             </div>
         </form>
        
</div>
<script>

  $(document).ready(function(){
    $("#customRadio").click(function(){
        $("#datepicker2").hide();
        $("#icon").hide();

    });
    $("#customRadio2").click(function(){
        $("#datepicker1").show();
        $("#datepicker2").show();
        $("#icon").show();
    });

}); 
</script>
<?php
include('footer.php');
?>