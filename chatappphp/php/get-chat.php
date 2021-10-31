<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
       include_once("../dbcon.php");

       $outgoing_id = mysqli_real_escape_string($con, $_POST['outgoing_id']); 
       $incoming_id = mysqli_real_escape_string($con, $_POST['incoming_id']);

        $output ="";

        $sql = mysqli_query($con, "SELECT * FROM `customer_message` 
            LEFT JOIN customer ON customer.unique_id =  customer_message.outgoing_msg_id
        WHERE 
        (`outgoing_msg_id` = {$outgoing_id}  AND `incoming_msg_id` = {$incoming_id}) 
        OR (`outgoing_msg_id` = {$incoming_id}  AND `incoming_msg_id` = {$outgoing_id})
        ORDER BY msg_id ");
         if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
                if($row['outgoing_msg_id'] === $outgoing_id){// if this is equal means this is sender
                    $output .= '<div class="chat outgoing">
                                    <div class="details">
                                        <p>'.$row['msg'].'</p>
                                    </div>
                                </div>';
                }else{//he is a receiver
                    $output .= '<div class="chat incoming">
                                    <img src="php/userprofileimage/'.$row['img'].'" alt="user">
                                    <div class="details">
                                        <p>'.$row['msg'].'</p>
                                    </div>
                                </div>';
                }   
            }
            echo $output;
         }else{
            $output.="No Messages till yet!";
         }

    }else{
        header("location: login.php");
    }
?>