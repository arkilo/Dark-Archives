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
echo "Task Complete";
?>
