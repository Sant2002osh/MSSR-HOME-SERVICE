<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "mssr_db";
$db_port = 3307;

// Create Connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
}
?>