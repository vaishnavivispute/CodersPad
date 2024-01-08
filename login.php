<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','test');
// get the post records
$email = $_POST['email'];
$password = $_POST['password'];



// database insert SQL code
$sql = "INSERT INTO `login_page` (`id`, `email`, `password`) VALUES ('0', '$email ', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Greeting! You have been login suceessfully.";
}


?>