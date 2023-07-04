<?php 
include ("connection2.php");

?>
<style>
    *
{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body
{
    background:#1994e6;
    padding: 0 10px;
}
.container
{
    border: 2px solid black;
    max-width: 500px;
    width: 100%;
    background-color: white;
    margin: 20px auto;
    padding: 30px;
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
}
.container .title
{
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    color: black;
    text-transform: uppercase;
    text-align: center; 
}
.container .form
{
    width: 100%;
}
.container .form .input_field
{
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}
.container .form .input_field label
{
    width: 200px;
    margin-right: 10px;
    font-size: 14px;
}
.container .form .input_field .input,
.container .form .input_field .textarea
{
    width: 100%;
    outline: none;
    border: 1px solid black;
    padding: 8px 10px;
    border-radius: 3px;
    transition: all 0.5s ease;
}
.container .form .input_field .textarea
{
    resize: none;
    height: 70;
}
.container .form .input_field .custom_select
{
    position: relative;
    width: 100%;
}
.container .form .input_field .input:focus,
.container .form .input_field .textarea:focus,
.container .form .input_field .custom_select:focus
{
    border: 1px solid #1994e6;
}
.container .form .input_field p
{
    font-size: 14px;
    color: #757575;
}
.container .form .input_field .check
{
    width: 15px;
    height: 15px;
    position: relative;
    display: block;
    cursor: pointer;
}
.container .form .input_field .btn
{
    width: 100%;
    background: blue;
    padding: 8px 10px;
    font-size: 15px;
    border: 0;
    color: black;
    cursor: pointer;
    border-radius: 3px;
    outline: none;
}
.container .form .input_field:last-child
{
    margin-bottom: 0;
}
.container .form .input_field .btn:hover
{
    background: aqua;
}

@media (max-width: 420px)
{
    .container .form .input_field
    {
        flex-direction: column;
        align-items: flex-start;
    }
    .container .form .input_field label
    {
        margin-bottom: 5px;
    }
    .container .form .input_field .terms
    {
        flex-direction: row;
    }
}
</style>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta charset="viewport" content= "width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Registration</title>
    </head>

    <body>
        <button class="button1">Register</button>
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
                        <input type="submit" value="Register" class="btn" name="register">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>

<?php

if($_POST['register']){
    $id            =    $_POST['id'];
    $fname         =    $_POST['fname'];
    $mname         =    $_POST['mname'];
    $lname         =    $_POST['lname'];
    $gender        =    $_POST['gender'];
    $date_of_birth =    $_POST['date_of_birth'];
    $address       =    $_POST['address'];
    $pwd           =    $_POST['password'];
    $cpwd          =    $_POST['cpassword'];

    $query = "INSERT INTO FORM VALUES('$id','$fname','$mname','$lname','$gender','$date_of_birth','$address','$pwd','$cpwd')";
    $data = mysqli_query($conn, $query);

    if($data){
       echo "Data saved";
    }else{
        echo "Connection failed".mysqli_connect_error($conn);
    }
}

?>

