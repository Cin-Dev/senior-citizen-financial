<?php 

require_once('db.php');
$query = "select *from form";
$result = mysqli_query($con,$query);

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.o">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="table.css">
        <title>Master List</title>
    </head>
    <body class="bg-dark">
    <nav id="navbar">
        <br><img src="logoNEWEST.png" alt="">
    </nav>
    <table bordered="1" cellspacing= "7"width= "84%">
    <br><br>
    <th colspan = "5"><br>SENIOR CITIZEN <br> FINANCIAL ASSISTANCE <br> MASTER LIST <br> <br> </th>
    <button class="button1"><a href="registration.php">Register</button>
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                            <table class= "table table-striped table-dark">
                                <thead>
                                <tr class="bg-dark text-white">
                                    <td scope="col">First Name</td>
                                    <td scope="col">Middle Name</td>
                                    <td scope="col">Last Name</td>
                                    <td scope="col">Gender</td>
                                    <td scope="col">Date of Birth</td>
                                    <td scope="col">Address</td>
                                    <td>Update</td>
                                    <td>Delete</td>
                                </tr>
                                </thead>
                                <tr>
                                    <?php 
                                     while($row = mysqli_fetch_assoc($result))
                                     {
                                    ?>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['mname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['date_of_birth']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><a href="update.info.php" class="btn btn-primary">Update</a></td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                     </tr>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </table>
    </body>
</html>