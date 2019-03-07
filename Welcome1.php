<?php


// require 'core.php';

include 'connection.php';
include 'Welcome.php';


if(isset($_POST['First_Name']) && isset($_POST['Last_Name']) && isset($_POST['Email_Address']) && isset($_POST['Address']) && isset($_POST['Zip']) && isset($_POST['Phone']) && isset($_POST['Experience']) && isset($_POST['Capabilities']))
{
  if(!empty($_POST['First_Name']) && !empty($_POST['Last_Name']) && !empty($_POST['Email_Address']) && !empty($_POST['Address']) && !empty($_POST['Zip']) && !empty($_POST['Phone']) && !empty($_POST['Experience']) && !empty($_POST['Capabilities']))
  {
     $First_Name = $_POST['First_Name'];
     $Last_Name = $_POST['Last_Name'];
      $Email_Address = $_POST['Email_Address'];
      $Address = $_POST['Address'];
      $Zip = $_POST['Zip'];
      $Phone = $_POST['Phone'];
      $Experience = $_POST['Experience'];
      $Capabilities = $_POST['Capabilities'];

     $query = "INSERT INTO `users`.`RegistrationForm` (`First_Name`, `Last_Name`, `Email_Address`, `Address`, `Zip`, `Phone`, `Experience`, `Capabilities`) VALUES ('$First_Name', '$Last_Name', '$Email_Address', '$Address', '$Zip', '$Phone', '$Experience', '$Capabilities');"
      // $query = "SELECT `id` FROM `user` WHERE `username`='".mysql_real_escape_string($username)."' AND `passwd`='".mysql_real_escape_string($passwd_new)."'";
      $query_run = mysql_query($query);
      if ($query_run) {
        echo "your are done";
      }

//       if($query_num_rows = mysql_num_rows($query_run))
//       {
//         echo "login ok!";
//       $user_id = mysql_result($query_run,0,'id');
//        $_SESSION['id'] = $user_id;
//        header('Location: inde.php');
//       }
//       else {
//         echo "pls enter valid username and password";
//       }
//
//   }
// }
// else {
//   echo "pls enter the Username and Passwd";
// }

 ?>
