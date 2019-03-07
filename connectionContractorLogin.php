<?php


$conn_err = 'connection error';

$host_name = 'localhost';
$user = 'root';
$passwd = '';
$database_name = 'users';

if(!@mysql_connect($host_name, $user, $passwd) || !@mysql_select_db($database_name))
{
 die($conn_err);
}
else {
  // echo "connected to database";
}

?>
