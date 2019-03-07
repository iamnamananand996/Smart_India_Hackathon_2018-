<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    <title>Registration</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;

</style>
<body>

<div class="container text-center"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-6 col-md-offset-6"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Agency name" name="name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Agency E-mail" name="email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Agency Password" name="pass" type="password" value="">
                            </div>

                             <div class="form-group">
                                <input class="form-control" placeholder="Conform Password" name="re_pass" type="password" value="">
                            </div>

                             <div class="form-group">
                                <input class="form-control" placeholder="Phone Number" name="phone" type="text" autofocus>
                            </div>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >

                        </fieldset>
                    </form>
                    <center><b>Already registered ?</b> <br><b></b><a href="login.php">Login here</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>

<?php

include 'connection.php';//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $cmf_pass = $_POST['re_pass'];
    $user_email=$_POST['email'];//same
    $user_phn = $_POST['phone'];

    if($user_name=='' || $user_pass=='' || $cmf_pass=='' || $user_email=='' || $user_phn=='' )
    {
        //javascript use for input checking
        echo"<script>alert('Please enter all details correctly ')</script>";
        echo"<script>window.open('Registration.php','_self')</script>";
exit();//this use if first is not work then other will not show
    }



    if($user_pass !=   $cmf_pass )
    {
      echo"<script>alert('Password does not match enter corretly')</script>";
      echo"<script>window.open('Registration.php','_self')</script>";
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
    $insert_user="INSERT INTO `users`.`users` (`id`, `user_name`, `user_pass`, `re_pass`, `user_email`, `phone`) VALUES (NULL, '$user_name', '$user_pass', '$cmf_pass', '$user_email', '$user_phn');";
    if(mysql_query($insert_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }



}

?>
