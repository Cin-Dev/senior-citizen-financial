<?php
 require_once 'db.php';

 function display_data(){
    global $con;
    $query = "select * from form";
    $result = mysqli_query($con,$query);
    return $result;
 }

?>