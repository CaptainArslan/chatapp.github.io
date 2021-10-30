<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php ");
    }
?>

<?php include_once("header.php"); ?>
<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php 
                    $fetch_query = mysqli_query($con, "SELECT * FROM `customer` WHERE `unique_id` = {$_SESSION['unique_id']}");
                    if(mysqli_num_rows($fetch_query) > 0 ){
                        $row = mysqli_fetch_assoc($fetch_query);
                    }
                ?>
                <div class="content">
                    <img src="<?php echo "php/userprofileimage/".$row['img']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname']." ". $row['lname']; ?></span>
                        <p><?php echo $row['status']; ?></p>
                        <!-- <p><?php echo $row['unique_id']; ?></p> -->
                    </div>
                </div>
                <a href="" class="logout">Logout</a>
            </header>
            <div class="search">
                <span>Select A user to start chat</span>
                <input type="text" placeholder="Enter Name to Search">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
               
            </div>
        </section>
    </div>
    <script src="js/searchbar.js"></script>
</body>

</html>