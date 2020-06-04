<?php echo "This is the src file"?>

<!-- Adding the css sheet  -->
<link rel="stylesheet" type="text/css" href="setting.css">

<!-- importing the php file -->
<?php include("sql_connect.php"); ?>

<header>
<div class="header">
  <div id="menubar">
      <ul>
      <li>Contact</li>
      <li>About</li>
      <li><a href="pages/Settings/setting.html">Settings</a></li>      
      <li id="parent_drop" >Articles
            <ul id="Drop">
              <li><a href="pages/Ancient Egypt/ancientegypt.html">Ancient Egypt</a></li>
              <li style="margin-bottom: 20px;">Makkah</li>
            </ul>
      </li>
      <li id="tile">Setting</li>

      <li><div id="Nav_button_icon">
      <a href="../../mainpage.html"><img src="../../files/pictures/se.png" height="43%" width="43%"></a>
      </div>
      </li>

    </ul>
  </div>
</div>
</header>

<!--Line container start -->


<div class="line_container">
<div id="v_l_left">
</div>

<div id="v_aes_left">
</div>

<div id="v_l_right">
</div>


<div id="h_l_top">
</div>

<div id="h_l_bottom">
</div>

<div id="h_l_contain_bottom">
</div>

<div id="v_l_inner">
</div>

</div>

<h2 style="color:orange;z-index: 4;position: absolute;margin-top: 350px;margin-left: 200px;">

<?php 
include("backend/sql_connect.php");

$raw_dump = "SELECT `First Name` FROM `Login_info` WHERE `age` = 3"; //You don't need a ; like you do in SQL
$result = mysqli_query($sql,$raw_dump);
while($row = mysqli_fetch_array($result)) {
  print_r($row[0]);
  echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";

            echo "<tr>";
                echo "<td>" . $row['First Name'] . "</td>";
                echo "<td>" . $row['Last Name'] . "</td>";
                echo "<td>" . $row['User name'] . "</td>";
                echo "<td>" . $row['Password'] . "</td>";
            echo "</tr>";

            echo "</table>";
}
?>  
</h2>

<!--Line container END -->

<!--Side heading container start -->


<div class="Headings_container">

<div id="Outer_main_heading">
<h2>Settings</h2>
</div>

<div id="Inner_main_heading">
<h3>Accounts & Profile</h3>
</div>


</div>
<!--Side heading container end -->


<!--Main container start -->
<div class="central_container_parent">

<div id="central_child_container_left">
	<ul id="central_container_left_list">
		<li>Account</li>
		<li>Profile</li>
		<li>Security</li>
		<li>FAQ</li>
		<li>Sign Out</li>
	</ul>
</div>

<div id="central_child_container_right">

<!-- The place for the data to be viewed from -->

<!-- Main table with embedded php -->
<table id="Main_table_container">
   <tr>
      <td>First Name</td>
      <td>$row['First Name']</td>
   </tr>
   <tr>
      <td>Last Name</td>
      <td>Data 4</td>
   </tr>
   <tr>
      <td>User Name</td>
      <td>Data 6</td>
   </tr>
   <tr>
      <td>Password</td>
      <td>Data 8</td>
   </tr>
   <tr>
      <td>Email</td>
      <td>Data 10</td>
   </tr>
   <tr>
      <td>Age</td>
      <td>Data 12</td>
   </tr>
</table>

</div>


</div>
<!--Main container end -->



<div class="Background_photo_page_1" style="top: 0px;bottom: 0px; right:0px;left:0px;">
</div>
