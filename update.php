<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "company";

//establish connection first
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}


$stmt = $conn -> prepare("UPDATE `employee` SET `Name` =?, `Phone` =?, `Email` =? WHERE `employee`.`ID` =? ");
$stmt -> bind_param("sisi",$Name,$Phone,$Email,$ID);

$Name = $_GET['Name'];
$Phone = $_GET['Phone'];
$Email = $_GET['Email'];
$ID = $_GET['ID'];

$stmt -> execute();
echo "Record Updated Successfully";
$stmt -> close();
$conn -> close();

header("Location:display.php");
?>