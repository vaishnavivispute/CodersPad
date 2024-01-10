<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$email = $_POST['email'];
$query = $_POST['query'];
$customercheck = $_POST['customercheck'];
$yourself = $_POST['yourself'];
$concern = $_POST['concern'];



// database insert SQL code
$sql = "INSERT INTO `contact_page`(`email`, `query`,`customercheck`, `yourself`, `concern`) VALUES ('$email', '$query', '$customercheck','$yourself', '$concern')";
// insert in database 
$rs = mysqli_query($con, $sql);

if(empty($email)){
    echo "Enter an email before proceed!";
}

elseif($rs)
{
	echo "Thank you for reaching us! We are providing best services.";
}
else{

}
?>