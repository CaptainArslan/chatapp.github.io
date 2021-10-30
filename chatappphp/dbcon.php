<?php
    $SERVER = "localhost";
    $user = "root";
    $password = "";
    $db = "chatapp";

    $con = mysqli_connect($SERVER,$user,$password,$db);
    if(!$con){
        echo "Connection Successfull ".mysqli_connect_error();
    }
?>