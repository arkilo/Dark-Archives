<?php echo "This is the src file"?>

<!-- Adding the css sheet  -->
<link rel="stylesheet" type="text/css" href="setting.css">
<!-- importing the php file -->
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

<!-- Getting values from php -->
<?php
$firstname  =  $_GET['firstname'];
$lastname   = $_GET['lastname']; 
$username   = $_GET['username'];
$password   = $_GET['password'];
$email      = $_GET['email'];
$age        = $_GET['age'];
?>
<div id="central_child_container_right">

<!-- The place for the data to be viewed from -->

<!-- php table processing -->

<h2 id="Table_heading">My Account</h2>
<!-- Main table with embedded php -->

<table id="Main_table_container">
   <tr>
      <td class="Table_head">First Name</td>
      <td><?php echo $firstname ?></td>
   </tr>
   <tr>
      <td class="Table_head">Last Name</td>
      <td><?php echo $lastname ?></td>
   </tr>
   <tr>
      <td class="Table_head">User Name</td>
      <td><?php echo $username ?></td>
   </tr>
   <tr>
      <td class="Table_head">Password</td>
      <td><?php echo $password ?></td>
   </tr>
   <tr>
      <td class="Table_head">Email</td>
      <td><?php echo $email ?></td>
   </tr>
   <tr>
      <td class="Table_head">Age</td>
      <td><?php echo $age ?></td>
   </tr>
</table>

</div>


</div>
<!--Main container end -->

<!--Delete button container-->
<div class="Delete_button_container">
<form action="../../backend/delete_account.php"  method="post">
<input type="hidden" id="delete_account_email" name="delete_account_email" value='<?php echo "$email"?>'>
<input type="submit" value="Delete Account">
</form>
</div>
<!-- Delete button END -->

<!-- Form to enter email and see the account data -->
<div class="Email_view_container">

<form action="../../backend/grep_from_sql.php"  method="post">
<label id="email_heading" for="email">To view account data, please enter your email</label>

<input type="email_input" id="email_input" name="email_input">

<div class="Submit_email">
<input id="email_submit" type="submit" value="Submit">
</div>
</form>

<!-- Email END --> 

<!-- Update FORM -->
<div class="update_form_container">
<form action="../../backend/update_into_sql.php"  method="post">
<h2>Update Account</h2>
<label id="field_to_update" for="field_to_update">Please choose the field that you would like to update.</label>
<select id="input_update_form" name="input_update_form">
    <option value="First Name">First Name</option>
    <option value="Last Name">Last Name</option>
    <option value="Username">Username</option>
    <option value="Password">Password</option>
    <option value="Email">Email</option>
    <option value="Age">Age</option>
</select>
<label id="field_new_value" for="field_new_value">Please enter the new value</label>

<input id="value_new" type="value_new" id="value_new" name="value_new"> 
<input id="new_value_submit" type="submit" value="Update">
<input type="hidden"  name="user" value='<?php echo "$email"?>'>


</form>
</div>

<!-- Update FORM END -->


<div class="Background_photo_page_1" style="top: 0px;bottom: 0px; right:0px;left:0px;">
</div>
