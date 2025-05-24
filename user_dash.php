<?php
    $host =  "localhost";
    $user = "root";
    $pass = ""; //WAMP default
    $db = "bsit3"; //your real DB name

    $con = mysqli_connect($host, $user, $pass, $db);
     
    if (!$con) {
        die("Connection failed: " .mysqli_connect_error());
    }

    $query = "SELECT * FROM tbl_accounts ORDER BY id DESC";
    $result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>