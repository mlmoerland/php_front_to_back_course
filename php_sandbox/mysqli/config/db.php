<?php
include_once('config.php');
// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if(mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL'. mysqli_connect_errno();
} else {
//    echo 'Successfully connected to MySQL<br>';
}