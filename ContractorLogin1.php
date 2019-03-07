<?php

include 'connectionContractorLogin.php';//make connection here
if(isset($_POST['register']))
{
    $full_name = $_POST['full_name'];//here getting result from the post array after submitting the form.
    $user_email = $_POST['email'];
    // echo "$user_email";
    $user_pass=$_POST['pass'];//same
    $cmf_pass = $_POST['re_pass'];
    // $user_email=$_POST['email'];//same
    $user_phn = $_POST['phone'];
    $recogniged = $_POST['MyRadio'];
    $user_licence_no = $_POST['licence_no'];
    $check_box = $_POST['checkbox'];
    // echo "$check_box";

    if($full_name=='' || $user_email=='' || $user_pass=='' || $cmf_pass=='' ||   $user_email=='' || $user_phn=='' || $user_licence_no=='' || $recogniged=='' || $check_box=='' )
    {
        //javascript use for input checking
        echo"<script>alert('Please enter form corretly')</script>";
exit();//this use if first is not work then other will not show
    }
    if($user_pass !=   $cmf_pass )
    {
      echo"<script>alert('Password does not match enter corretly')</script>";
      echo"<script>window.open('ContractorLogin.php','_self')</script>";
exit();
    }


//here query check weather if user already registered so can't register again.
    // $check_email_query="select * from contracterlogin WHERE email='$user_email'";
    $check_email_query = "SELECT *  FROM `contracterlogin` WHERE `email` = '$user_email'";
    // SELECT *  FROM `contracterlogin` WHERE `email` LIKE '1'
    $run_query=mysql_query($check_email_query);
    // echo "$run_query";
    echo mysql_num_rows($run_query);

    if(mysql_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="INSERT INTO `users`.`contracterlogin` (`full_name`, `email`, `pass`, `re_pass`, `phone`, `recogniged`, `licence_no`) VALUES ('$full_name', '$user_email', '$user_pass', '$cmf_pass', '$user_phn', '$recogniged', '$user_licence_no');";
    if(mysql_query($insert_user))
    {
         echo"<script>alert('You are register Sussesfully')</script>";
        echo"<script>window.open('loginContractor.php','_self')</script>";
        // echo "$insert_user";
    }



}

?>
