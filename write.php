<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','test');
// get the post records
$email = $_POST['email'];
$name = $_POST['name'];
$message=$_POST['message'];



// database insert SQL code
$sql = "INSERT INTO `write` (`email`, `name`, `message`) VALUES ('$email', '$name ', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);
if(empty($email)){
    echo "Could you please enter your email?";
}
elseif($rs)
{
	echo "Gracious! Thank you for your valuable feedback for us.";
}

else{
    
}


?>