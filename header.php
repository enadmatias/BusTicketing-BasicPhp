<head>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-teal.css">
<link rel="stylesheet" href="fontawesome-free-5.2.0-web/css/all.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="MDB-Free_4.5.10/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="MDB-Free_4.5.10/css/style.css" rel="stylesheet">
    <link href="MDB-Free_4.5.10/css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
     <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/helpers.css">


     <script type="text/javascript" src="sample/js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="sample/js/wickedpicker.js"></script>
		<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>


		<!-- Calendar --> 
		<link rel="stylesheet" href="sample/css/wickedpicker.css" />
				<link rel="stylesheet" href="sample/css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

			<script>
$(document).ready(function() {
setInterval( function() {
var hours = new Date().getHours();
$(".hours").html(( hours < 10 ? "0" : "" ) + hours);
}, 1000);
setInterval( function() {
var minutes = new Date().getMinutes();
$(".min").html(( minutes < 10 ? "0" : "" ) + minutes);
},1000);
setInterval( function() {
var seconds = new Date().getSeconds();
$(".sec").html(( seconds < 10 ? "0" : "" ) + seconds);
},1000);
});
</script>
