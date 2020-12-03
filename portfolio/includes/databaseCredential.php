<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$database = "ttrangre_grc";
$username = "ttrangre_ttrangre";
$password = "896836Grcc!";
$hostname = "localhost";
$cnxn = @mysqli_connect($hostname, $username, $password, $database)
or die ("There is a problem");

