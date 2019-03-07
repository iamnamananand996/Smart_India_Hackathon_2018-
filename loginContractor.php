<?php
session_start();//session starts here

?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="css/uploadWorkerAgency.css">

	<title>Minimum Bootstrap HTML Skeleton</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

	<div class="container">



 <div class="omb_login">
    	<h3 class="omb_authTitle">Login or <a href="#">Register</a></h3>
		<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    <div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook visible-xs"></i>
			        <span class="hidden-xs">Facebook</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
			        <i class="fa fa-twitter visible-xs"></i>
			        <span class="hidden-xs">Twitter</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus visible-xs"></i>
			        <span class="hidden-xs">Google+</span>
		        </a>
	        </div>
		</div>

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>




		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">
			    <form class="omb_loginForm" action="loginContractor.php" autocomplete="off" method="POST">
						<fieldset>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="email" placeholder="email address">
					</div>
					<span class="help-block"></span>

					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="pass" placeholder="Password">
					</div>
                    <span class="help-block">Password error</span>

					<!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> -->
					<input class="btn btn-lg btn-primary btn-block" type="submit" value="login" name="login" >
				</fieldset>
				</form>
			</div>
    	</div>
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				<label class="checkbox">
					<input type="checkbox"  value="remember-me">Remember Me
				</label>
			</div>


			<div class="col-xs-12 col-sm-4">
				<p class="omb_forgotPwd">
					<strong><a href="ContractorLogin.php">Regiter</a></strong>
				</p>
			</div>
		</div>





	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>



<?php

include 'connectionContractorLogin.php';

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    // $check_user="select * from  contracterlogin WHERE user_email='$user_email'AND user_pass='$user_pass'";
    $check_user = "SELECT *  FROM `contracterlogin` WHERE `email` = '$user_email' AND `pass` = '$user_pass'";
    $run=mysql_query($check_user);

    if(mysql_num_rows($run))
    {
        echo "<script>window.open('Contractor1.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
      echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>
