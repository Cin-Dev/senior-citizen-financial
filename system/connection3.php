<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "responsiveform4";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    if($con)
    {
        //echo "Connection ok";
    }else{
        echo "Failed".mysqli_connect_error();
    }
?>