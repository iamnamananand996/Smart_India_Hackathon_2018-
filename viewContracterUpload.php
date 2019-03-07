
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
    // $query1 = "SELECT * FROM `uplaodWorkerAgency`";
		// $query1 = "SELECT `full_name`,`email`,`phone`,`recogniged`,`licence_no` FROM `contracterlogin` WHERE 1";
    // $query1 = "SELECT *  FROM `uplaodWorkerAgency` WHERE `language` = '1'";
		$query1 = "SELECT * FROM `uplaodagency`";
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
    <span ><strong>Full Name:</strong></span> <?php echo $row1['name']."<br>"; ?>
    <span><strong>Zip Code:</strong></span> <?php echo $row1['zip']."<br>"; ?>
    <span><strong>Date:</strong></span> <?php echo $row1['date_in']."<br>"; ?>
    <span><strong>Recogniged By Gov:<strong></span> <?php echo $row1['date_in']."<br>"; ?>


    </div>
    <?php
$count++;
	}
    // }
    ?>


	</div>


	<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
	<script>
	  // Initialize Firebase
	  var config = {
	    apiKey: "AIzaSyA-OsXh94uLy7s_qe9TjO5KzwGgwO9-r-E",
	    authDomain: "sih2018-8f87f.firebaseapp.com",
	    databaseURL: "https://sih2018-8f87f.firebaseio.com",
	    projectId: "sih2018-8f87f",
	    storageBucket: "",
	    messagingSenderId: "885370490713"
	  };
	  firebase.initializeApp(config);
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>

</body>

</html>
