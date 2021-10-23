<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','us');

// get the post records
$title = $_POST['title'];
$text = $_POST['text'];


// database insert SQL code
 $sql = "INSERT INTO `utenti` (`title`, `text`) VALUES ('$title', '$text')";

// insert in database 
 $rs = mysqli_query($con, $sql);


// $check = mysqli_query($con, "SELECT Username FROM tb where Username = '$UserName'");
// if(mysqli_num_rows($check) > 0){
//     echo('Usernmae Already exists');
// 	header('Refresh: 1.5; URL=index.html');
// }
// else{
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $result = mysqli_query($con, "INSERT INTO tb (UserName) VALUES ('$UserName')");
// }
// }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <form action="users.php" method="POST">
        Title: <input type="text" name="title" id="title">
        Text: <input type="text" name="text" id="text">
        <input type="submit" value="Invia">
    </form>



    <?php

$query = "select * from utenti";
$queryResult = $con->query($query);
echo "<table>";
while ($queryRow = $queryResult->fetch_row()) {
    echo "<tr>";
    for($i = 0; $i < $queryResult->field_count; $i++){
        echo "<td>$queryRow[$i]</td>";
    }
    echo "</tr>";
}
echo "</table>";
$conn->close();

?>
</body>
</html>