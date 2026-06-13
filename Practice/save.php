<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name,email,gender,dob,password)
VALUES('$name','$email','$gender','$dob','$password')";

if(mysqli_query($conn,$sql)){
    echo "Data Saved Successfully";
    echo "<br><a href='display.php'>View Data</a>";
}
else{
    echo "Error";
}
?>