<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "oicinter_rahman", "eeu,_2L;Au]q", "oicinter_muslimworldbiz");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE businessmatching(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    name VARCHAR(100) NOT NULL,
    designation VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    code VARCHAR(100) NOT NULL,
    phone  VARCHAR(100) NOT NULL,
    company VARCHAR(100) NOT NULL,
    registration VARCHAR(100) NOT NULL,
    profile VARCHAR(100) NOT NULL,
    industry VARCHAR(100) NOT NULL,
    status VARCHAR(100) NOT NULL,
    cluster VARCHAR(100) NOT NULL,
    address VARCHAR(500) NOT NULL,
    address2 VARCHAR(500) NOT NULL,
    city VARCHAR(100) NOT NULL,
    postcode VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    country_code VARCHAR(10) NOT NULL,
    company_phone  VARCHAR(100) NOT NULL,
    interested_field VARCHAR(100) NOT NULL
    
)";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>