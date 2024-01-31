<?php 
echo "You have been logged out<br>";  
session_start();  
$_SESSION =  [];   
session_destroy();
?>
<a href="index.php">Return to main page</a>