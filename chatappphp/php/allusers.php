<?php
session_start();
include_once("../dbcon.php");
$outgoing_id = $_SESSION['unique_id'];

$sql = mysqli_query($con, "Select * from `customer` where unique_id != '$outgoing_id' ");

$output = "";
if (mysqli_num_rows($sql) > 0) {
    include("data.php");
} else {
    $output = "<div class='no-data'> No Users is Avaialables 😞 </div>";
}
echo $output;
