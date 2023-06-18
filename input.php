<?php




    if (isset($_GET['btn1'])) {
        $ID = $_GET["ID"];
        $Name = $_GET["Name"];
        $Phone = $_GET["Phone"];
        $Email = $_GET["Email"];


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

    
    $sql = "insert into employee(ID, Name, Phone, Email) values ('$ID', '$Name', '$Phone', '$Email')";

    $result = $conn->query($sql);

    $conn->close();

    header("Location:display.php");
    

        
    }

