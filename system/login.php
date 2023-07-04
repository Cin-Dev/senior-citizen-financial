<?php

session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";

            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result)> 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: payout.php");
                        die;
                    }
                }
            }
            echo "Wrong username or password!";
        }else
        {
            echo "Wrong username or password!";
        }

    }


?>

<!DOCTYPE html>
<html>
<head>
<div class="wrapper">
<form method="post">
        <div class="logo">
            <img src="logoNEWEST.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Payout Login
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="user_name" id="user_name" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="btn mt-3" type= "submit"value="Login">Login</button>
        </form>
        <div class="text-center fs-6">
            <a href="signup.php">Sign up</a>
        </div>
        </form>
    </div>
    <style>
    /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background:#1994e6;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #1994e6, -13px -13px 20px #1994e6;
}

.logo {
    width: 80px;
    margin: auto;
}   

.logo img {
    width: 100%;
    height: 80px;
    margin: auto;
    object-fit: cover;
    border-radius: 50%;
    background-color: black;
    box-shadow: 0px 0px 3px #1994e6,
        0px 0px 0px 5px #1994e6,
        8px 8px 15px #1994e6,
        -8px -8px 15px #1994e6;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.8rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
    text-align: center;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 10%;
    margin-top: 10%;
    border-radius: 30px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}


.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color:#1994e6;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
    </style>

</body>
</html>