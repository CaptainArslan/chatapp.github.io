<?php 
session_start();
    require("../dbcon.php");
    //echo "This data is send to the signup form";
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // echo "Welcome to login";
    if(!empty($email) && !empty($password) ){
        $login_query = mysqli_query($con, "SELECT * FROM `customer` WHERE `email` = '$email' AND `password` = '$password'");
        if(mysqli_num_rows($login_query) > 0)
        {
            $row = mysqli_fetch_assoc($login_query);

            $status = "active";
            $sql_active = mysqli_query($con, "UPDATE `customer` SET `status`= '{$status}' WHERE `unique_id` = '{$row['unique_id']}' ");
            if($sql_active)
            {
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "success";
            }
        }
        else
        {
            echo "Email or Password is incorrect";
        }
    }
    else
    {
        echo "All Input Are Required";
    }
?>