<?php
include('header.php');
session_start(); 
if(isset($_POST['btnCart'])){
  $qty = $_POST['qnty'];
  $_SESSION['quantity']  = $qty;
   
}

?>
<body>


<style>
.nav{
    width:900px;
    margin-left:250px; 
}

h2{
    margin-top:-80px;
}
a{
    font-size:18px;
}



body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.col {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
  margin-left:250px; 
  margin-top:50px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<body>
<ul class="nav nav-tabs bg-secondary text-light">
  <li class="nav-item">
    <a class="nav-link disabled text-light">Search</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-light">Book</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active text-dark">Payment</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled text-light">Confirmation</a>
  </li>
</ul>

<div class="col w3-container" style="width:900px">
  <div class="col-75">
    <div class="container">
      <form action="submitprocess.php" method="POST">
      <div class="col-25">
    <div class="container w3-border-0">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <div class="form-inline">
        <div class="col-sm-2">
      <p>Bus No</p>
    </div>
     <div class="col-25">
      <p>Departure Date</p>
    </div>
     <div class="col-25">
    <p>Arrival Date</p>
  </div>
   <div class="col-sm-4">
    <p>Number of Tickets</p>
  </div>
  <div class="form-inline">
    </div>
     <div class="col-sm-2 mr-2">
      <p><?php echo "".$_SESSION['busId']?></p>
     </div>
     <div class="col-sm-2 mr-5">
      <p><?php echo "". $_SESSION['bus_departure_date']?></p>
    </div>
    <div class="col-sm-4 mr-2">
     <p><?php echo "".  $_SESSION['bus_arrival_date'];?></p>
        </div>
      <div class="col-sm-2">
     <p><?php echo "".  $_SESSION['quantity'];?></p>
        </div>   
  
 
   </div>
      <hr>
      <p>Total <span class="price" style="color:black">
      <b>Php <?php  $y=$_SESSION['quantity'];$x = $_SESSION['busCost'];
  function compute($x,$y){
  return  $_SESSION['TotalCost']=$x*$y;
}  
  echo compute($x,$y);?></b></span></p>
    </div>
        <div class="row">
          <div class="col-25">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text"  name="fullname" value="" required="required">
            <label for="email"><i class="fa fa-envelope" ></i> Email</label>
            <input type="text"  name="email" value ="" required="required">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text"  name="address" value ="" required="required">
            <label for="city"><i class="fa fa-institution"></i> Contact No</label>
            <input type="text"  name="contact" value ="" required="required">
          </div>

          <div class="col-25">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fab fa-cc-visa" style="color:navy;"></i>
              <i class="fab fa-cc-amex" style="color:blue;"></i>
              <i class="fab fa-cc-mastercard" style="color:red;"></i>
              <i class="fab fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="" required="required">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="" required="required">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="" required="required">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="" required="required">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="" required="required">
              </div>

            </div>
          </div>
        </div>
        <input type="submit" value="Continue to checkout" class="btn" name="checkout">

      </form>
    </div>
  </div>
  
  </div>
</div>




<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
include('footer.php');
?>