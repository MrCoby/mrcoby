
<?php
/*
 * This file helps with initiating connectivity to the DB
 */
$connect_err = 'We are experiencing downtime on our server';

//$connect here is a global link object
$connect = mysqli_connect('localhost','root','ekwu13to', 'bookmarka2')or die($connect_err);
mysqli_select_db($connect, 'bookmarka2')or die($connect_err);

?>