<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <title>Registration</title>
</head>
<!-- <style>
    .login-panel {
        margin-top: 150px;

</style> -->
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="Welcome2.php">
                        <fieldset>
                            <div class="form-group col-sm-6 form-group">
                            <label><i class="fa fa-user" aria-hidden="true"></i> First Name</label>
                                <input class="form-control" placeholder="Username" name="First_Name" type="text" autofocus>
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="Last_Name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="Email_Address" type="text" value="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="Email_Address" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="Address" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="Zip" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="Phone" type="text" value="">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="Experience" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="Capabilities" type="text" value="">
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

include 'connection.php';
include 'Welcome2.php';



 ?>
