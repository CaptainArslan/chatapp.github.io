<?php 
    include_once("header.php");
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>
                Realtime Chat App
            </header>
            <form action="#" method="POST" autocomplete="off"> 
                <div class="error-txt">This is an Error</div>
                    <div class="field input">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" placeholder="Enter Email Address">
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Your Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue To Chat " placeholder="submit">
                    </div>
                
            </form>
            <div class="link">Not have an Account? <a href="index.php">Sign up</a></div>
        </section>
    </div>
    <script src="js/pass_toggle.js"></script>
    <script src="js/login.js"></script>
</body>
</html>