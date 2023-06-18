<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete record</title>
</head>

<body>

    <?php
    if (isset($_GET['ID'])) {

        
            
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
    
    
            $stmt = $conn->prepare("DELETE FROM `employee` WHERE `employee`.`ID` =? ");
            $stmt->bind_param("i", $ID);
    
      
            $ID = $_GET['ID'];
    
            $stmt->execute();
            header("Location:display.php");
            $stmt->close();
            $conn->close();
    
    }
    ?>

</body>

</html>

