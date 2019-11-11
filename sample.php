<?php
include ('header.php');
require 'connection.php';

if(isset($_POST['btnAvail'])){
	$origin = $_POST['origin'];
	$destination = $_POST['destination'];
	$timedpart = $_POST['depart'];
	$timearrive = $_POST['arrive'];
	$date=date_create("$timedpart");
    echo date_format($date,"Y-m-d");
	echo "".$origin ."". $destination;
	echo "Date ".$timedpart ."". $timearrive; 
	
}
?>
<body>


<?php
include ('footer.php');
?>