<?php
session_start();
require("../dbcon.php");
//echo "This data is send to the signup form";
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

if (empty($fname) && empty($lname) && empty($email) && empty($password)) {
    echo "All Inputs are Required";
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $email . " Invalid Email ";
    exit();
}

$email = strtolower($email);

//check email already in use?
$check_sql_query = mysqli_query($con, "SELECT * FROM `customer` WHERE `email` = '$email' ");
if (mysqli_num_rows($check_sql_query) > 0) {
    echo "Email Already is in use";
    exit();
}

if (empty($_FILES) || $_FILES['image']['name'] == "") {
    echo "Please Select An Image";
    exit();
}

$img_name = $_FILES['image']['name']; //getting name of the images
$tmp_name = $_FILES['image']['tmp_name']; //this temporary name is use to store file in database

//Lets explode image and get extyension of the image
$img_explode = explode('.', $img_name);
$img_extension = end($img_explode); //here we get the extension of the image

$extension = ['png', 'jpeg', 'jpg'];

if (in_array($img_extension, $extension) != true) {
    echo "Only Png, Jpg, Jpeg format allowed";
    exit();
}

$time = time();
$new_img_name = $time . $img_name;
if (!move_uploaded_file($tmp_name, "userprofileimage/" . $new_img_name)) {
    echo "Error Occured While uploading Image";
    exit();
}

$status = "active";
$random_id = rand(time(), 10000000);
// $password = password_hash($password, PASSWORD_DEFAULT);

$insert_sql = mysqli_query($con, "INSERT INTO `customer`
    ( `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) 
        VALUES 
    ('$random_id','$fname','$lname','$email','$password','$new_img_name','$status')");

if (!$insert_sql) {
    echo "Error while user registeration";
    exit();
}

$check_random_id = mysqli_query($con, "SELECT * FROM `customer` WHERE `email` = '$email'");
if (mysqli_num_rows($check_random_id) > 0) {
    $row = mysqli_fetch_assoc($check_random_id);
    $_SESSION['unique_id'] = $row['unique_id'];
    echo "success";
    exit();
}
