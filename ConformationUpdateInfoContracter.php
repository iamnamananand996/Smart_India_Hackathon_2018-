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
	<link rel="stylesheet" href="css/ConformationUpdateInfoContracter.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">

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
	</div>
	<div class="container text-center">

	<h1>Note: </h1>
	<br>
	<h3>This will Delete Your All Information if sure Click ok to Updte Information</h3>
	<br><br>

	<button type="submit" onclick="location.href = 'UpdateInfoContracter.php';" class="btn-xlarge btn-outline-primary  "><i class="fa fa-upload" aria-hidden="true"></i> Update Infromation</button>

	<button type="submit" onclick="location.href = 'Contractor1.php';" class="btn-xlarge1 btn-outline-danger  "><i class="fa fa-upload" aria-hidden="true"></i> Back to Main Page</button>


	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
