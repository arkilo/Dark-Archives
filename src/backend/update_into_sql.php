<?php
include("sql_connect.php");

$selected_field = $_POST['input_update_form'];
echo $selected_field;
$new_value_by_user = $_POST['value_new'];
$email_input	= $_POST['user'];


if($selected_field=='First Name'){
	$change 	= $new_value_by_user;
}
else if($selected_field=='Last Name'){
	$change  	= $new_value_by_user;
}
else if($selected_field=='Username'){
	$change  	= $new_value_by_user;
}
else if($selected_field=='Password'){
	$change 	= $new_value_by_user;
}
else if($selected_field=='Email'){
	$change  	= $new_value_by_user;
}
else if($selected_field=='Age'){
	$change  	= $new_value_by_user;
}

$sql_command = "UPDATE Login_info SET `$selected_field`='$change ' WHERE Email='$email_input' ";
$sending_query = mysqli_query($sql, $sql_command);

#selecting the row again for update viewing
$sql_command_2 = "SELECT * FROM Login_info WHERE Email = '$email_input'";
$sending_query= mysqli_query($sql,$sql_command_2);
$row = mysqli_fetch_array($sending_query);
$firstname= print_r($row[0],true);
$lastname = print_r($row[1],true);
$username = print_r($row[2],true);
$password = print_r($row[3],true);
$email    = print_r($row[4],true);
$age      = print_r($row[5],true);


header("Location:/Darchives_project_database/src/pages/Settings/setting.php?firstname=$firstname&lastname=$lastname&username=$username&password=$password&email=$email&age=$age");


#header("Location:/Darchives_project_database/src/pages/Settings/setting.php?database_updated");
?>
