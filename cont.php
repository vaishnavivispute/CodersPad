<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$email = $_POST['email'];
$query = $_POST['query'];
$category = $_POST['category'];
$yourself = $_POST['yourself'];
$concern = $_POST['concern'];



// database insert SQL code
$sql = "INSERT INTO `contact_page`(`email`, `query`,`category`, `yourself`, `concern`) VALUES ('$email', '$query', '$category','$yourself', '$concern')";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Thank you for reaching us! We are providing best services.";
}