
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Minimum Bootstrap HTML Skeleton</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

	<div class="container">

    <?php
include 'connectionContractorLogin.php';
    // $query1 = mysql_query("select * from employee where employee_id=$id", $connection);
    $query1 = "SELECT * FROM `uplaodWorkerAgency`";
		$query1 = "SELECT `full_name`,`email`,`phone`,`recogniged`,`licence_no` FROM `contracterlogin` WHERE 1";
    // $query1 = "SELECT *  FROM `uplaodWorkerAgency` WHERE `language` = '1'";
    $result = mysql_query($query1);
    // if (mysql_query($query1) == 1) {
      # code...
$count = 1;
    while ($row1 = mysql_fetch_array($result)) {
    ?>
    <div class="form col-md-4 well">
    <h2><?php

echo "Details of Contractor $count";

		 ?></h2>
    <!-- Displaying Data Read From Database -->
    <span ><strong>Full Name:</strong></span> <?php echo $row1['full_name']."<br>"; ?>
    <span><strong>Email:</strong></span> <?php echo $row1['email']."<br>"; ?>
    <span><strong>Phone Number:</strong></span> <?php echo $row1['phone']."<br>"; ?>
    <span><strong>Recogniged By Gov:<strong></span> <?php echo $row1['recogniged']."<br>"; ?>
    <span><strong>Licence Number:<strong></span> <?php echo $row1['licence_no']."<br>"; ?>

    </div>
    <?php
$count++;
	}
    // }
    ?>


	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
