<?php
include("sql_connect.php");


$first_name 	= $_POST['firstname'];
$last_name 		= $_POST['lastname'];
$user_name		= $_POST['username'];
$password 		= $_POST['password'];
$email 			= $_POST['email'];
$age 			= $_POST['age'];




$data = "INSERT INTO `Login_info` (`First Name`, `Last Name`, `Username`, `Password`, `Email`, `Age`)  VALUES  ('$first_name','$last_name','$user_name','$password','$email','$age')";
$senddata = mysqli_query($sql,$data);

if($senddata){
	echo "Insertion Successful";
}
else{
	echo "Data not inserted";
}



header("Location:/Darchives_project_database/src/mainpage.html?signup=successfulsir");



?>
