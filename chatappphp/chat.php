<?php
session_start();
ob_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>

<?php
include_once("header.php");
include_once("dbcon.php");
?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <?php

                $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
                //echo $user_id;
                $fetch_query = mysqli_query($con, "SELECT * FROM `customer` WHERE `unique_id` = {$user_id}");
                if (mysqli_num_rows($fetch_query) > 0) {
                    $row = mysqli_fetch_assoc($fetch_query);
                }
                ?>
                <img src="<?php echo "php/userprofileimage/" . $row['img']; ?>" alt="user image">
                <div class="details">
                    <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                    <p><?php echo $row['status']; ?></p>
                </div>
            </header>


            <div class="chat-box">
                <!-- <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="../img/user-1.png" alt="user image">
                    <div class="details">
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div> -->
            </div>
            <form action="" method="POST" class="typing-area">
                <input type="hidden" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>">
                <input type="hidden" name="incoming_id" value="<?php echo $user_id; ?>">
                <input type="test" name="message" class="input-field" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <script src="js/chat.js"></script>
</body>

</html>