<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// modify these settings according to the account on your database server.
$host = getenv("RAILWAY_DATABASE_HOST");
$port = getenv("RAILWAY_DATABASE_PORT");
$username = getenv("RAILWAY_DATABASE_USERNAME");
$user_pass = getenv("RAILWAY_DATABASE_PASSWORD");
$database_in_use = getenv("RAILWAY_DATABASE_NAME");



$mysqli = new mysqli($host, $username, $user_pass, $database_in_use, $port);
if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    // echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$timeout_seconds = 5;
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, $timeout_seconds);
echo $mysqli->host_info . "<br>";

?>