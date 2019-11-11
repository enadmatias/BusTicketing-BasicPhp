<?php
include('header.php');
require 'connection.php';
session_start(); 

?>
 <style>
 .nav{
    width:900px;
    margin-left:250px; 
}
a{
    font-size:18px;
}
.jumbotron{
   margin-left:250px; 
   margin-top: 50px;
}
</style>
<body>
<ul class="nav nav-tabs bg-secondary">
  <li class="nav-item">
    <a class="nav-link disabled text-light">Search</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-light">Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-light">Payment</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-dark">Confirmation</a>
  </li>
</ul>
<form action="home.php">
<div class="jumbotron jumbotron-fluid" style="width:900px">
  <div class="container">
    <h1>Invoice Reciept</h1>      
    <p>I believed you have read and accept the term and condition of our company policy. You cannot cancel the booked ticket once you already clicked  the checkout button. All information that you provided below are correct and we will send email confirmation shortly after the transaction</p>

<?php 
  $busno = $_SESSION['busID']; 
 $totalcost = $_SESSION['TotalCost'];

echo "Commuters Info:<br>";
  echo "Name: ".$_SESSION['name']."<br/>";
  echo "Email: ".$_SESSION['emailadd']."<br/>";
  echo "Address: ".$_SESSION['Address']."<br/>";
  echo "Contact No: ".$_SESSION['Contact']."<br/>";
  echo "Bus Info:<br/>";
  echo "Bus No:".$busno."<br/>";
  echo "Time Departure:<br/>";
  echo "TotalCost: Php ".$totalcost."<br/>";



  
?>
<button type="submit" class="btn btn-info">Submit</button>
  </div>
</div>
</form>
<?php

include('footer.php');
?>