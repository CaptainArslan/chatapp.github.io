<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<?php 
    include_once("header.php");
?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="img/user-2.png" alt="">
                <div class="details">
                    <span>M Arslan</span>
                    <p>Active Now</p>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="img/user-3.png" alt="">
                    <div class="details">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="img/user-3.png" alt="">
                    <div class="details">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                    </div>
                </div>
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="img/user-3.png" alt="">
                    <div class="details">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                    </div>
                </div>                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="img/user-3.png" alt="">
                    <div class="details">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, ratione!</p>
                    </div>
                </div>
            </div>
            <form action="" class="typing-area">
                <input type="test" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
</body>

</html>