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
	<link rel="stylesheet" href="css/Contractor1.css">

	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link href="https://fonts.googleapis.com/css?family=Joti+One" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" class="css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Minimum Bootstrap HTML Skeleton</title>

	<!--  -->

	<style>

	</style>

</head>

<body>
<div class="jumbotron text-center">
    <h1>Welcome ! Example</h1>

		<div class="pull-left ">
		  <?php
		  $name = $_SESSION['email'];
		  echo "<br><h4><strong> You are loged In $name</strong></h4>";
		  ?>
		</div>


		<div class="pull-right ">
		<h3><strong><a href="LogoutContracter.php">Logout</a> </strong></h3>
		</div>
    <div class="pull-right">

           <button type="button" onclick="location.href = 'ConformationUpdateInfoContracter.php';" class="btn btn-success"><i class="fa fa-cog" aria-hidden="true"></i> Update my Info</button>

       </div>
  </div>
	<div class="container text-center">
<!--
       <div class="pull-right">

           <button type="button" class="btn btn-success">Update my Info</button>

       </div>
-->
        <br>
          <button type="submit" onclick="location.href = 'UploadContracterWork.html';" class="btn-xlarge btn-outline-primary  "><i class="fa fa-upload" aria-hidden="true"></i> Upload Work</button><br><br><br><br>

      <button type="button" onclick="location.href = 'viewContracterUpload.php';" class="btn-xlarge1 btn-outline-success"><i class="fab fa-rupee-sign" aria-hidden="true"></i> View My Upload</button><br><br><br><br>
      <button type="button" onclick="location.href = 'veiwAgencyContracter.html';" class="btn-xlarge2 btn-outline-danger"><i class="fa fa-briefcase" aria-hidden="true"></i> View Agencies</button>
      <br><br><br>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
