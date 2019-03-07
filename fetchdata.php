
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

    while ($row1 = mysql_fetch_array($result)) {
    ?>
    <div class="form col-md-6">
    <h2>---Details---</h2>
    <!-- Displaying Data Read From Database -->
    <span>Name:</span> <?php echo $row1['contact']; ?>
    <span>E-mail:</span> <?php echo $row1['language']; ?>
    <span>Contact No:</span> <?php echo $row1['first_name']; ?>
    <span>Address:</span> <?php echo $row1['last_name']; ?>
    <span>Name:</span> <?php echo $row1['education']; ?>
    <span>E-mail:</span> <?php echo $row1['description']; ?>
    <span>Contact No:</span> <?php echo $row1['computer_skill']; ?>
    <span>Address:</span> <?php echo $row1['village']; ?>
    <span>Name:</span> <?php echo $row1['state']; ?>
    <span>E-mail:</span> <?php echo $row1['district']; ?>
    <span>Contact No:</span> <?php echo $row1['pin_code']; ?>
    <span>Address:</span> <?php echo $row1['address']; ?>
    </div>
    <?php
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
