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
// $sql = "INSERT INTO `tb` (`Name`, `LastName`, `Email`, `Comment`) VALUES ('$Name', '$LastName', '$Email', '$Comment')";

// insert in database 
// $rs = mysqli_query($con, $sql);


$check = mysqli_query($con, "SELECT Username FROM tb where Username = '$UserName'");
if(mysqli_num_rows($check) > 0){
    echo('Usernmae Already exists');
	header('Refresh: 1.5; URL=index.html');
}
else{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = mysqli_query($con, "INSERT INTO tb (UserName) VALUES ('$UserName')");
    header("location: users.php");
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<form name="Form" method="POST" action="register.php">
    <p>
      <label for="Name">Name </label>
      <input type="text" name="Name" id="Name" required>
    </p>


    <p>
      <label for="LastName">LastName</label>
      <input type="text" name="LastName" id="LastName" required>
    </p>

    <p>
      <label for="UserName">UserName</label>
      <input type="text" name="UserName" id="UserName" required>
    </p>


    <p>
      <label for="Email">Email</label>
      <input type="email" name="Email" id="Email" required>
    </p>


    <p>
      <label for="Commnet">Comment</label>
      <textarea name="Comment" id="Comment"></textarea>
    </p>


    <p>
      <input type="submit" name="Submit" id="Submit" value="Submit">
    </p>
  </form>
</body>
</html>