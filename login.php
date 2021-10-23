<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db');

// get the post records
$Name = $_POST['Name'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Comment = $_POST['Comment'];
$UserName = $_POST['UserName'];

// database insert SQL code
 $sql = "INSERT INTO `tb` (`Name`, `LastName`, `Email`, `Comment`, 'Username') VALUES ('$Name', '$LastName', '$Email', '$Comment', '$UserName)";

// insert in database 
 $rs = mysqli_query($con, $sql);



 header("location: home.php");
?>