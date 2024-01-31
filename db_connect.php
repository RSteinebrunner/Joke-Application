<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// modify these settings according to the account on your database server.
$host = "roundhouse.proxy.rlwy.net";
$port = "54211";
$username = "root";
$user_pass = "cAGD51F13bG3c6AA4a32bb4eBHdFh1CD";
$database_in_use = "railway";



$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

?>
