<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Record</title>

    <!-- bootstrap css and js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<script>
    function del_confirm() {
        return confirm("Do you really want to delete the record");
    }
</script>

</head>

<body>

    <h1 style="text-align: center;">
        <br>
        Employee Record

    </h1>
    <br>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "company";

    //establish connection first
    $conn = new mysqli($servername, $username, $password, $dbname);
    ?>
<?php
    //check connection
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }
    ?>
<?php
    //select and store tablename
    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);
 ?>   

    <?php

    if ($result->num_rows > 0) { ?>

        <center>
            <table class='table table-bordered border-dark' style='width: 50%; height: auto; text-align: center;'>

                <!-- //output data of each row -->
                <tr>
                    <th>&nbsp; ID &nbsp;</th>
                    <th>&nbsp; Name &nbsp;</th>
                    <th>&nbsp; Phone &nbsp;</th>
                    <th>&nbsp; Email &nbsp;</th>
                    <th>&nbsp; Edit &nbsp;</th>
                    <th>&nbsp; Delete &nbsp;</th>
                </tr>

                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><a href='edit.php?ID=<?php echo $row['ID']; ?>'> <i class='bi bi-pen'></i> </a> </td>
                        <td><a href='delete.php?ID=<?php echo $row['ID']; ?>' onclick="return del_confirm()"> <i class="bi bi-trash3"></i> </a> </td>
                    </tr>

                    <?php
                    
                    ?>


                <?php } ?>

            </table>

        </center>
    <?php } 

    else {
    echo "0 results";
    } ?>

    <?php $conn->close(); ?>

    <h6 style="text-align: center;"><a href="index.php">Add a New Record</a></h6>

</body>

</html>