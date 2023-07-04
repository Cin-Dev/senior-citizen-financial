<?php 

require_once('db2.php');
$query = "select *from deceased";
$result = mysqli_query($con,$query);

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.o">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="#">
        <title>Deceased List</title>
    </head>

<style>
*{
    padding: 0%;
    margin: 0%;
    background: url(images/back4.png) no-repeat center center/cover;
}

table, th, td {
    border:2px solid black;
    position: center;
    font-style: bold;
    font-family: sans-serif ;
    height: 50%;
    border-color: black;
    margin-left: auto;
    margin-right: auto;
    margin-top: auto;
    margin-bottom: auto;
    color: black;
    text-align: center;
    vertical-align: top;
    background: white;
}
td:nth-child(1)
{
    min-width: 150px;
}
td:nth-child(2)
{
    min-width: 150px;
}
td:nth-child(3)
{
    min-width: 150px;
}
td:nth-child(4)
{
    min-width: 120px;
}
td:nth-child(5)
{
    min-width: 100px;
}
td:nth-child(6)
{
    min-width: 200px;
}

#bodynavbar {
    width: 180vw;
    height: 40px;
    border: 3px;
    border-radius: 15px;
   
}

#navbar img {
    display: flex;
    width: 180px;
    height: 150px;
    margin-left: auto;
    margin-top: auto;
    margin-bottom: auto;
    margin-right: auto;
    object-fit: cover;
    border-radius: 50%;
    background-color: black;
    box-shadow: 0px 0px 3px black,
    0px 0px 0px 5px black,
    8px 8px 15px black,
    -8px -8px 15px #240eb3;
}
th, br:nth-child(1)
{
    font-size: 35px;
}
.button1 {
  border: none;
  float: right;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  margin-right: 150px;
  font-weight: bold;
  position: absolute;
  right:0;
  top: 33.5%;
}
.button1{
    background color: white;
    color: black;
    border: 2px solid black;
}
.button1:hover{
    background color: #1994e6;
    color: white;
}
</style>

    <body class="bg-dark">
        <button class="button1"><a href="DRegistration.php">Register</a></button>
    <nav id="navbar">
        <br><img src="logoNEWEST.png" alt="">
    </nav>
    <table bordered="1" cellspacing= "7" width= "79%" >
    <br><br>
    <th colspan = "5"><br>DECEASED LIST <br> OF SENIOR CITIZENS <br> </th>
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
                                    <td scope="col">Date of Death</td>
                                    <td scope="col">Address</td>
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
                                        <td><?php echo $row['date_of_death']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
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