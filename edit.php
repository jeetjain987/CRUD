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

    <!-- jquery cdn -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> -->

    <script>
        function replace_confirm() {
            return confirm("Do you really want to Replace the record");
        }
    </script>

</head>

<body>

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

    ?>

    <?php

    if (isset($_GET['ID'])) {

        $ID = $_GET['ID'];
    }

    $sql = "SELECT * FROM employee WHERE ID = $ID";
    $result = $conn->query($sql);

    // $n = $_GET['name'];
    ?>

    <div class="container">
        <div class="row pt-4">
            <div class="col-6 offset-3">
                <form action="update.php" method="GET">

                    <?php 
                    
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $ID = $row['ID'];
                            $Name = $row['Name'];
                            $Phone = $row['Phone'];
                            $Email = $row['Email'];
                    ?>
                    <div class="mb-3">
                        <h2>Edit ID <?php echo $ID; ?> </h2>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput14" class="form-label">ID </label>
                        <input type="text" class="form-control text-center border border-dark" style="color: grey;" id="exampleFormControlInput4" name="ID" readonly="true" value="<?php echo $row['ID']; ?>">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput11" class="form-label">Edit Name </label>
                        <input type="text" class="form-control text-center border border-dark" id="exampleFormControlInput1" name="Name" value="<?php echo $row['Name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput12" class="form-label">Edit Phone Number </label>
                        <input type="number" class="form-control text-center border border-dark" id="exampleFormControlInput2" name="Phone" value="<?php echo $row['Phone']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput13" class="form-label"> Edit Email </label>
                        <input type="email" class="form-control text-center border border-dark" id="exampleFormControlInput3" name="Email" value="<?php echo $row['Email']; ?>">
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark mb-3 col-12" name="btn1" onclick="return replace_confirm()">Replace</button>
                    </div>

                    <?php
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>

</html>