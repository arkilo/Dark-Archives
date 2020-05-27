<?php

$sqlusername='phpadmin';
$sqlservername='localhost';
$sqlpassword='phpadmin';
$sqldatabasename='Darchives';

$sql = mysqli_connect($sqlservername,$sqlusername,$sqlpassword,$sqldatabasename);

if($sql){
	echo "Connection successful";
}
else{
	echo "Could not connect to the database...";
}




?>
