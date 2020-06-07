<?php
$email_input	= $_POST['user'];


#$email_input = 'thirdrow@gmail.com';
$raw_dump = "SELECT * FROM Login_info WHERE Email = '$email_input'";
$result = mysqli_query($sql,$raw_dump);
$row = mysqli_fetch_array($result);
$firstname= print_r($row[0],true);
$lastname = print_r($row[1],true);
$username = print_r($row[2],true);
$password = print_r($row[3],true);
$email    = print_r($row[4],true);
$age      = print_r($row[5],true);


header("Location:/Darchives_project_database/src/pages/Settings/setting.php?firstname=$firstname&lastname=$lastname&username=$username&password=$password&email=$email&age=$age");

#  echo "<table>";
#            echo "<tr>";
#                echo "<th>id</th>";
#                echo "<th>first_name</th>";
#                echo "<th>last_name</th>";
#                echo "<th>email</th>";
#            echo "</tr>";
#
#            echo "<tr>";
#                echo "<td>" . $row['First Name'] . "</td>";
#                echo "<td>" . $row['Last Name'] . "</td>";
#                echo "<td>" . $row['User name'] . "</td>";
#                echo "<td>" . $row['Password'] . "</td>";
#            echo "</tr>";
#
#            echo "</table>";

?>
