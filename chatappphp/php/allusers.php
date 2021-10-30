<?php 
    session_start();
    include_once("dbcon.php");
    $all_data = mysqli_query($con, "Select * from `customer` ");
    $output = "";
    if(mysqli_num_rows($all_data) == 1 ){
        $output = "No Users is Avaialables :(";
    }else if (mysqli_num_rows($all_data) > 0){
        while($row  = mysqli_fetch_assoc($all_data)){
            $output.=" 
            <a href=''>
            <div class='content'>
                <img src='img/user-3.png' alt=''>
                <div class='details'>
                    <span></span>
                    <p>This is test message</p>
                </div>
            </div>
            <div class='status-dot'><i class='fas fa-circle'></i></div>
        </a>";
        }
    }
?>