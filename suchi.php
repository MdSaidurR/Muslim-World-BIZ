<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'oicinter_rahman');
define('DB_PASSWORD', 'eeu,_2L;Au]q');
define('DB_NAME', 'oicinter_muslimworldbiz');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO users (name, email)
VALUES ( 'bai', 'bai@example.com')";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
