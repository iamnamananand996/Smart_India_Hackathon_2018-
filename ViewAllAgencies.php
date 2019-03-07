
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
    // $query1 = "SELECT *  FROM `uplaodWorkerAgency` WHERE `language` = '1'";
    $result = mysql_query($query1);
    // if (mysql_query($query1) == 1) {
      # code...
$count = 1;
    while ($row1 = mysql_fetch_array($result)) {
    ?>
    <div class="form col-md-4 well">
    <h2><?php

   echo "Details of Labour $count";

		 ?></h2>
    <!-- Displaying Data Read From Database -->
    <span><strong>Contact:</strong></span> <?php echo $row1['contact']."<br>"; ?>
    <span><strong>Language:<strong></span> <?php echo $row1['language']."<br>"; ?>
    <span><strong>First Name:</strong></span> <?php echo $row1['first_name']."<br>"; ?>
    <span><strong>Last Name:</strong></span> <?php echo $row1['last_name']."<br>"; ?>
    <span><strong>Education:</strong></span> <?php echo $row1['education']."<br>"; ?>
    <span><strong>Description:</strong></span> <?php echo $row1['description']."<br>"; ?>
    <span><strong>Computer_skill:</strong></span> <?php echo $row1['computer_skill']."<br>"; ?>
    <span><strong>Village:</strong></span> <?php echo $row1['village']."<br>"; ?>
    <span><strong>State:</strong></span> <?php echo $row1['state']."<br"; ?>
    <span><strong>District:</strong></span> <?php echo $row1['district']."<br"; ?>
    <span><strong>Pin Code:</strong></span> <?php echo $row1['pin_code']."<br"; ?>
    <span><strong>Address:</strong></span> <?php echo $row1['address']; ?>
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
