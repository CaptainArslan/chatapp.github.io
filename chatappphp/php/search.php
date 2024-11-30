<?php
include_once("../dbcon.php");

session_start();
$outgoing_id = $_SESSION['unique_id'];

$searchTerm = mysqli_real_escape_string($con, $_POST['searchTerm']);
// echo $searchTerm;
$output .= " No User Found Related to your Search!";
$sql = mysqli_query($con, "SELECT * FROM `customer` WHERE NOT unique_id = {$outgoing_id} AND (`fname` LIKE '%{$searchTerm}%' OR `lname` LIKE '%{$searchTerm}%') ");
if (mysqli_num_rows($sql) > 0) {
    include("data.php");
}
echo $output;
