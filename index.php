<!DOCTYPE html>
<html lang="en">

<head>


    <!-- NOTE:

        THE CODE WILL ONLY WORK IF YOU HAVE REQUIRED DATABASE AND TABLE IN YOUR XAMPP, 
        TO CREATE THE DATABASE AND TABLE FIRST RUN 'create_db.php' and then 'create_table.php' WHICH I HAD ALREADY MADE FOR YOUR CONVINIENCE.
        THANK YOU! -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Record</title>


    <!-- bootstrap css and js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- jquery cdn -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> -->

</head>

<body>

    
    <div class="container">
        <div class="row pt-4">
            <div class="col-6 offset-3">
                <form action="input.php" method="GET">
                    <div class="mb-3">
                        <label for="exampleFormControlInput4" class="form-label">ID </label>
                        <input type="number" class="form-control text-center border border-dark" id="exampleFormControlInput4" name="ID" placeholder="Enter Employee ID" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name </label>
                        <input type="text" class="form-control text-center border border-dark" id="exampleFormControlInput1" name="Name" placeholder="Enter Employee Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Phone </label>
                        <input type="number" class="form-control text-center border border-dark" id="exampleFormControlInput2" name="Phone" placeholder="Enter Employee Phone Number" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Email </label>
                        <input type="email" class="form-control text-center border border-dark" id="exampleFormControlInput3" name="Email" placeholder="Enter Employee Email" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark mb-3 col-12" name="btn1">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>