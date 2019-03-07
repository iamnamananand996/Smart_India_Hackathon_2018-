<?php
session_start();
//session_destroy();



if(!$_SESSION['email'])
{

    header("Location: loginContractor.php");//redirect to login page to secure the welcome page without login access.
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="css/ContractorLogin.css">

	<title>Minimum Bootstrap HTML Skeleton</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

	<div class="pull-left ">
		<?php
		$name = $_SESSION['email'];
		echo "<br><h4><strong> You are loged In $name</strong></h4>";
		?>

	<div class="container">


	<form class="form-horizontal " role="form"  method="post" action="UpdateInfoContracter1.php">
               <fieldset>
                <h2>Re-Enter Your Details to Update Your Information</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="full_name" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="pass" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="re_pass" placeholder="Re-enter Password" id="password" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" name="phone" placeholder="Enter Your Phone Number" id="" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Recogniged By Gov. of India </label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="MyRadio" value="yes" id="femaleRadio" value="Female">Yes
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="MyRadio" value="no" id="maleRadio" value="Male">No
                                </label>
                            </div>
<!--
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="uncknownRadio" value="Unknown">Unknown
                                </label>
                            </div>
-->
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Enter License Number</label>
                    <div class="col-sm-9">
                        <input type="text" name="licence_no" placeholder="Enter Licence Number" id="" class="form-control">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="checkbox" value="ok">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">


                        <!-- <center><b></b> <b></b><a class="btn btn-primary btn-block" href="Contractor1.html">Upload</a></center> -->
												<input class="btn btn-lg btn-primary btn-block" type="submit" value="Update information" name="register" >
                    </div>
                </div>
        </fieldset>
            </form> <!-- /form -->

            <center><b>Go Back to Main Page</b> <br><b></b><a href="Contractor1.php">Go Back</a></center>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>

<?php

include 'UpdateInfoContracter1.php';

 ?>
