<?php 
include ("connection3.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="viewport" content= "width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Registration</title>
    </head>

    <body>
        <div class ="container">
            <form actiton="a" method="post">
            <div class="title">
                Registration Form </div>
                <div class="form">
                    <div class="input_field">
                        <label>First Name</label>
                        <input type="text" class= "input" name="fname"></div>
                    <div class="input_field">
                        <label>Middle Name</label>
                        <input type="text" class= "input" name="mname"></div>
                    <div class="input_field">
                        <label>Last Name</label>
                        <input type="text" class= "input" name="lname"></div>
                    <div class="input_field">
                        <label>Gender</label>
                        <div class="custom_select">
                        <select name="gender">
                            <option>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        </div>
                    </div>
                    <div class="input_field">
                        <label>Date Of Death</label>
                        <input type="text" class= "input" placeholder="Y-M-D" name="date_of_death"></div>
                    <div class="input_field">
                        <label>Address</label>
                        <input type="text" class= "input" name="address"></div>
                    <div class="input_field">
                    <div class="input_field terms">
                        <label class="check">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <p>Agree to terms and conditions</p>
                    </div>
                    <div class="input_field">
                        <input type="submit" value="Register" class="btn" name="register">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>

<?php

if($_POST['register']){
    $fname         =    $_POST['fname'];
    $mname         =    $_POST['mname'];
    $lname         =    $_POST['lname'];
    $gender        =    $_POST['gender'];
    $date_of_death =    $_POST['date_of_death'];
    $address       =    $_POST['address'];

    $query = "INSERT INTO DECEASED VALUES('$fname','$mname','$lname','$gender','$date_of_death','$address')";
    $data = mysqli_query($con, $query);

    if($data){
        echo "Data saved";
     }else{
         echo "Connection failed".mysqli_connect_error($con);
     }
}

include('scripts.php');
?>

