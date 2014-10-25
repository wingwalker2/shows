<?php
// Setup file:
# site variables
$site_title = 'Shows 0.0';

# Database connection here
$db_host = 'localhost';
$db_usr = 'homeUser';
$db_passwd = 'l3tM3|nPl3@s3';
$db_name = 'shows';

$db = mysqli_connect($db_host, $db_usr, $db_passwd, $db_name)OR die('Could not connect because: ' . mysqli_connect_error());
?>
