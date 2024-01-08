<?php include 'index.html';

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
////validation


// database insert SQL code
$sql = "INSERT INTO `sign_up` (`id`, `email`, `password`, `cpassword`) VALUES ('0', '$email ', '$password', '$cpassword')";
$rs = mysqli_query($con, $sql);
// insert in database 
if(empty($email)){
	echo "Enter an email, password and confirm password before proceed!";
	echo "<br>Enter valid email address such as :abc@gmail.com";
}
elseif($rs)
{
	echo "Your records have been submitted successfully!";
}
else{

}




?>
