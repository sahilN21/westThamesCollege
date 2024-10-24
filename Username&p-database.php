<html>
<head>
<title>Log In Infomation</title>
<body>

<?php
session_start();
$_SESSION["username"] = "username";
$_SESSION["email"] = "email";

$username = $REQUEST['username'];
$password=  $REQUEST['password'];
$email = $REQUEST["email"];

$con=mysqli_connect(hostname: 'localhost',username: 'tlevel_sahil',password: 'sahil123',database: 'tlevel_sahil');
mysqli_query(mysql: $con,query: "INSERT INTO LogIn(username, email,password) VALUES('$username','$email','$password')");


echo "log in details entered into database";
?>
</head>
</body>
</html>



