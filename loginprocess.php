<?php
require 'connection.php';

if(isset($_POST['btnLogin'])){
    $username1 = $_POST['usr'];
    $password1 = $_POST['pwd'];
 if(empty($username1) or empty($password)){
        echo "<script>alert('Input Fields!');window.location='home.php'</script>";
    }   
$sql = "SELECT * FROM commuter WHERE username = '$username1' and password = '$password1'";
$result = mysqli_query($con,$sql);
$rows = mysqli_num_rows($result);
while($data = mysqli_fetch_assoc($result)){
    $username = $data['username'];
    $password = $data['password'];
    $id = $_SESSION['id'];
    $name = $data['name'];
    $address = $data['address'];
    $email = $data['email'];
    $contact = $data['contact'];
}

if($rows==1){
        if($username1== $username and $password1 == $password){
            session_start();
            $_SESSION['client'] = "".$username;
            $_SESSION['id'] = "".$id;
            $_SESSION['name'] = "".$name;
            $_SESSION['address'] = "".$address;
            $_SESSION['email'] = "".$email;
            $_SESSION['contact'] = "".$contact;
          header('location:client.php');
        }
        else{
            echo "<script>alert('Sayup');window.location='home.php'</script>";
        }
}

}
if(isset($_POST['btnSignUp'])){
       $fullname = $_POST['fullname'];
       $address = $_POST['address'];
       $contact = $_POST['phone'];
       $email = $_POST['email'];
       $username = $_POST['usr'];
       $password = $_POST['pwd'];
       echo "$fullname";
      $sql = "INSERT INTO commuter (name, address, email, contact, username, password)
VALUES ('$fullname', '$address', '$email', $contact, '$username', '$password')";
$result = mysqli_query($con, $sql);
  if($result){
            echo "<script>alert('data inserted!');window.location='client.php'</script>";
        }else{
            echo "<script>alert('Error inserting data!');window.location='home.php'</script>";
        }
}
?>