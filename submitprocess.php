<?php
include('header.php');
session_start(); 
require 'connection.php';

if(isset($_POST['checkout'])){
    $name= $_POST['fullname'];
    $email= $_POST['email'];
    $address= $_POST['address'];
    $contact= $_POST['contact'];
    $busno = $_SESSION['busId']; 
     $totalcost = $_SESSION['TotalCost'];
     $ticketNo  = $_SESSION['quantity'];
    $insert_sql = "INSERT into commuter(name, address, email, contact, bus_no, no_ticket) values('$name', '$email', '$address', $contact, $busno, $ticketNo)";

    $result = mysqli_query($con,$insert_sql);
    $_SESSION['name'] = $name;
    $_SESSION['emailadd']= $email;
    $_SESSION['Address'] = $address;
    $_SESSION['Contact'] = $contact;
    $_SESSION['busID'] = $busno;
 if($result){
     $lastId = mysqli_insert_id($con);
      $insert = "INSERT into record(bus_no, commuter_id, Total_cost,Total_Ticket) values($busno, $lastId, $totalcost, $ticketNo)";
      $result1 = mysqli_query($con,$insert);
       echo "<script>alert('Successfuly Inserted!');window.location='submit.php'</script>";
      }
  // else

//echo "<script>alert('Usuccessfull');window.location='payment.php'</script>";
  }



  include('footer.php');
  ?>
