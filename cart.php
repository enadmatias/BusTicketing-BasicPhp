<?php
include('header.php');
session_start(); 
?>
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
<style>
.nav{
    width:900px;
    margin-left:250px; 
}
a{
    font-size:18px;
}
table{
    margin-top:50px;
    margin-left:250px; 
}
</style>
<body>
<ul class="nav nav-tabs bg-secondary text-light">
  <li class="nav-item">
    <a class="nav-link disable text-light">Search</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-dark">Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-light">Payment</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-light">Confirmation</a>
  </li>
</ul>
<table class="table table-hover w3-border" style="width:900px">
		<tr class="bg-dark text-white">
			<th>Bus No</th>
			<th>Bus Type</th>
			<th>Departure Time</th>
			<th>Origin</th>
			<th>Destination</th>
      <th>No of Tickets</th>
			<th>Cost</th>
            <th></th>
		</tr>
<?php
include 'connection.php';
$sql = "SELECT * FROM bus";
$result = mysqli_query($con,$sql);
$rows= mysqli_num_rows($result);

if(isset($_POST['btnAvail'])){
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];
    $date_depart = $_POST['depart'];
    $date_arrive = $_POST['arrive'];
    $date1 = date_create("$date_depart");
    $date2 = date_create("$date_arrive");
    $date_departure= date_format($date1,"Y-m-d");
    $date_arrival = date_format($date2,"Y-m-d");

    while ($data = mysqli_fetch_assoc($result)){
      if(isset($_POST['rdoBtnOneway'])){
         $ticket_type = 'Oneway';
         if ($origin == $data['bus_origin'] or $destination == $data['bus_destination'] or  $ticket_type
        == $data['bus_ticket_type']){
        $_SESSION['payment'] = "".$data['bus_type']."".$data['bus_departure_date']."".$data['bus_origin']."".$data['bus_destination']."".$data['bus_cost'];
        $_SESSION['busId'] = "".$data['bus_no'];
        $_SESSION['busCost'] = "".$data['bus_cost'];
        $_SESSION['bus_departure_date'] = "".$data['bus_departure_date'];
        $_SESSION['bus_arrival_date'] = "".$data['bus_arrival_date'];
        if( $date_departure == $data['bus_departure_date'] or $date_arrival == $data['bus_arrival_date']){
        echo "<form action='payment.php' method='POST'>";
        echo "<tr>";
        echo "<td>" . $data['bus_no'] . "</td>";
        echo "<td>" . $data['bus_type'] . "</td>";
        echo "<td>" . $data['bus_departure_time'] . "</td>";
        echo "<td>" . $data['bus_origin'] . "</td>";
        echo "<td>" . $data['bus_destination'] . "</td>";
        echo "<td> <input class='form-control' type='text' pattern='[0-9]' value='1' name='qnty'></td>";
        echo "<td>Php " . $data['bus_cost'] . "</td>";
        echo "<td><button type='submit' class='btn btn-primary'  name='btnCart' id='cart'>Add to Cart<i class='fa fa-shopping-cart'></i></button></td><br>";
        echo "</tr>";
        echo "</form>";
        
        
      }

     
       }

      }
    
    else if(isset($_POST['rdoBtnRoundTrip'])){
       $ticket_type = 'RoundTrip';
      if ($origin == $data['bus_origin'] or $destination == $data['bus_destination'] or $ticket_type
        == $data['bus_ticket_type']){
        $_SESSION['payment'] = "".$data['bus_type']."".$data['bus_departure_date']."".$data['bus_origin']."".$data['bus_destination']."".$data['bus_cost'];
        $_SESSION['busId'] = "".$data['bus_no'];
        $_SESSION['busCost'] = "".$data['bus_cost'];
        $_SESSION['bus_departure_date'] = "".$data['bus_departure_date'];
        $_SESSION['bus_arrival_date'] = "".$data['bus_arrival_date'];
        if( $date_departure == $data['bus_departure_date'] or $date_arrival == $data['bus_arrival_date']){
        echo "<form action='payment.php' method='POST'>";
        echo "<tr>";
        echo "<td>" . $data['bus_no'] . "</td>";
        echo "<td>" . $data['bus_type'] . "</td>";
        echo "<td>" . $data['bus_departure_time'] . "</td>";
        echo "<td>" . $data['bus_origin'] . "</td>";
        echo "<td>" . $data['bus_destination'] . "</td>";
        echo "<td> <input class='form-control' type='text' pattern='[0-9]' value='1' name='qnty'></td>";
        echo "<td>Php " . $data['bus_cost'] . "</td>";
        echo "<td><button type='submit' class='btn btn-primary'  name='btnCart' id='cart'>Add to Cart<i class='fa fa-shopping-cart'></i></button></td><br>";
        echo "</tr>";
        echo "</form>";
        
    }
       

     }


}
}
}

?>
</table>

<?php

include('footer.php');
?>