<?php

include 'connectionContractorLogin.php';//make connection here
if(isset($_POST['register']))
{
    $user_contact = $_POST['contact'];
    $user_language = $_POST['language'];
    $first_name = $_POST['first_name'];//here getting result from the post array after submitting the form.
    $last_name = $_POST['last_name'];
    $education = $_POST['MyRadio1'];
    $user_description = $_POST['description'];
    $computer_skill = $_POST['MyRadio'];
    $user_village = $_POST['village'];
    $user_state = $_POST['state'];
    $user_district = $_POST['district'];
    $user_pin_code = $_POST['pin_code'];
    $user_address = $_POST['address'];


    if($user_contact=='' || $user_language=='' || $first_name=='' || $last_name=='' ||   $education=='' || $user_description=='' || $computer_skill=='' || $user_village=='' || $user_state=='' || $user_district=='' || $user_pin_code=='' || $user_address=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter form corretly')</script>";
exit();//this use if first is not work then other will not show
    }




//insert the user into the database.
    // $insert_user="INSERT INTO `users`.`contracterlogin` (`full_name`, `email`, `pass`, `re_pass`, `phone`, `recogniged`, `licence_no`) VALUES ('$full_name', '$user_email', '$user_pass', '$cmf_pass', '$user_phn', '$recogniged', '$user_licence_no');";
    $insert_user = "INSERT INTO `users`.`uplaodWorkerAgency` (`contact`, `language`, `first_name`, `last_name`, `education`, `description`, `computer_skill`, `village`, `state`, `district`, `pin_code`, `address`) VALUES ('$user_contact', '$user_language', '$first_name', '$last_name', '$education', '$user_description', '$computer_skill', '$user_village', '$user_state', '$user_district', '$user_pin_code', '$user_address');";
    if(mysql_query($insert_user))
    {
         echo"<script>alert('Your Labour Updated Sussesfully')</script>";
        echo"<script>window.open('uplaodWorkerAgency.php','_self')</script>";
        // echo "$insert_user";
    }



}

?>
