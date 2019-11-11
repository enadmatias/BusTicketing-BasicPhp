<?php
include('connection.php');
if(isset($_POST['btnReg'])){
    $name = $_POST['fname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact= $_POST['cntNo'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO commuter(name, address, email, contact, username, password) VALUES('$name','$address','$email',$contact,'$username','$password')";
    $result = mysqli_query($con,$sql);
    if ($result) {
        echo "<script>alert('Successfuly Inserted!');window.location='home.php'</script>";
    } else {
       echo "<script>alert('Unsuccessful');window.location='signup.php'</script>";
       }
}
?>