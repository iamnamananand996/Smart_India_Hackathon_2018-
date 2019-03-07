<?php

include 'connectionUplaodAgency.php';


$Work = $_POST['Work'];
$Zip = $_POST['Zip'];
$date_in = $_POST['date_in'];
$date_out = $_POST['date_out'];
// echo "$Work";
// echo "$Zip";
// echo "$date_in";
// echo "$date_out";


if($Work=='')
{
    //javascript use for input checking
    echo"<script>alert('Please enter the Work')</script>";
exit();//this use if first is not work then other will not show
}

if($Zip=='')
{
    echo"<script>alert('Please enter the Zip Code')</script>";
exit();
}

if($date_in=='')
{
    echo"<script>alert('Please enter Date of Commencement')</script>";
exit();
}



if($date_out=='')
{
    //javascript use for input checking
    echo"<script>alert('Please enter the date of Completion')</script>";
exit();//this use if first is not work then other will not show
}

$query = "INSERT INTO `users`.`UplaodAgency` (`name`, `zip`, `date_in`, `date_out`) VALUES ('$Work', '$Zip', '$date_in', '$date_out')";

if (mysql_query($query)) {
  # code..
  echo"<script>alert('Work Uploaded Sussesfully')</script>";
  echo"<script>window.open('UploadContracterWork.php','_self')</script>";

}else {

  echo "data not uplaoded";
}


 ?>
