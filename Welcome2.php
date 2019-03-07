<?php

include 'connection.php';
// include 'Welcome.html';
// include 'test.html';


$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
 $Email_Address = $_POST['Email_Address'];
 $Address = $_POST['Address'];
 $Zip = $_POST['Zip'];
 $Phone = $_POST['Phone'];
 $Experience = $_POST['Experience'];
 $Capabilities = $_POST['Capabilities'];








if($First_Name=='')
{
    //javascript use for input checking
    echo"<script>alert('Please enter the First name')</script>";
exit();//this use if first is not work then other will not show
}

if($Last_Name=='')
{
    echo"<script>alert('Please enter the last name')</script>";
exit();
}

if($Email_Address=='')
{
    echo"<script>alert('Please enter the email address')</script>";
exit();
}



if($Zip=='')
{
    //javascript use for input checking
    echo"<script>alert('Please enter the Zip Code')</script>";
exit();//this use if first is not work then other will not show
}

if($Phone=='')
{
    echo"<script>alert('Please enter the Phone Number')</script>";
exit();
}

if($Capabilities=='')
{
    echo"<script>alert('Please enter the Capabilities')</script>";
exit();
}
//here query check weather if user already registered so can't register again.
$check_email_query="select * from users WHERE user_email='$user_email'";
$run_query=mysql_query($check_email_query);

if(mysql_num_rows($run_query)>0)
{
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
}
//insert the user into the database.
$insert_user="INSERT INTO `users`.`RegistrationForm` (`First_Name`, `Last_Name`, `Email_Address`, `Address`, `Zip`, `Phone`, `Experience`, `Capabilities`) VALUES ('$First_Name', '$Last_Name',
  '$Email_Address', '$Address', '$Zip', '$Phone', '$Experience', '$Capabilities')";

// echo "$insert_user";

if(mysql_query($insert_user))
{
    echo"<script>window.open('Agency1.html','_self')</script>";
}


 ?>
