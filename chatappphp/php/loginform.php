<?php
session_start();
require("../dbcon.php");
//echo "This data is send to the signup form";
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

// echo "Welcome to login";
if (empty($email) && empty($password)) {
    echo "All input Are Required!";
    exit();
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email is invalid!";
    exit();
}
if (strlen($password) < 6) {
    echo "Password must be greater than 6 characters";
    exit();
}

// $password = password_hash($password, PASSWORD_DEFAULT);
$email = strtolower($email);

$login_query = mysqli_query($con, "SELECT * FROM `customer` WHERE `email` = '$email' AND `password` = '$password'");
if (!mysqli_num_rows($login_query)) {
    echo "Email or Password is incorrect";
    exit();
}

$row = mysqli_fetch_assoc($login_query);

$status = "active";
$sql_active = mysqli_query($con, "UPDATE `customer` SET `status`= '{$status}' WHERE `unique_id` = '{$row['unique_id']}' ");
if ($sql_active) {
    $_SESSION['unique_id'] = $row['unique_id'];
    echo "success";
    exit();
}
