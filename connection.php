<?php


function Connect()
{
 $dbhost = "";
 $dbuser = "";
 $dbpass = "";
 $dbname = "";

 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}
 
?>