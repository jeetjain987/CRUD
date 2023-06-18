<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company";

// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql code to create table
$sql = "CREATE TABLE employee(
        ID INT(11)  PRIMARY KEY, 
        Name VARCHAR(30) NOT NULL,
        Phone INT(11) NOT NULL,
        Email VARCHAR(50) NOT NULL
        )";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully ";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>