<?php 
include ("connection2.php");

echo $_GET['fn'];          

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="viewport" content= "width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Update Information</title>
    </head>

    <body>
        <div class ="container">
            <form actiton="a" method="post">
            <div class="title">
                Update Information</div>
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
                        <label>Date Of Birth</label>
                        <input type="text" class= "input" placeholder="Y-M-D" name="date_of_birth"></div>
                    <div class="input_field">
                        <label>Address</label>
                        <input type="text" class= "input" name="address"></div>
                    <div class="input_field">
                        <label>Password</label>
                        <input type="password" class= "input" name="password"></div>   
                    <div class="input_field">
                        <label>Confirm Password</label>
                        <input type="password" class= "input" name="cpassword"></div>
                    <div class="input_field terms">
                        <label class="check">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <p>Agree to terms and conditions</p>
                    </div>
                    <div class="input_field">
                        <input type="submit" value="Update" class="btn" name="register">
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
    $date_of_birth =    $_POST['date_of_birth'];
    $address       =    $_POST['address'];
    $pwd           =    $_POST['password'];
    $cpwd          =    $_POST['cpassword'];

    $query = "INSERT INTO FORM VALUES('$fname','$mname','$lname','$gender','$date_of_birth','$address','$pwd','$cpwd')";
    $data = mysqli_query($conn, $query);

    if($data){
        echo "Information has been save to Master List";
    }else{
        echo "Failed";
    }
}
?>

