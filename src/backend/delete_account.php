<?php

include('sql_connect.php');

#taking the email input from the user whose account needs to be deleted.
$email_input	= $_POST['delete_account_email'];
echo $email_input;
$sql_command = "DELETE FROM Login_info WHERE Email = '$email_input'";
$sending_query = mysqli_query($sql, $sql_command);
echo "Task Completed";



header("Location:/Darchives_project_database/src/pages/Settings/setting.php?deletionsuccessful");
?>
