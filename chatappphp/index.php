
<?php 
    include_once("header.php");
?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>
                Realtime Chat App
            </header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="FirstName">First Name</label>
                        <input type="text" name="fname" placeholder="Enter First Name" required>
                    </div>
                    <div class="field input">
                        <label for="LastName">Last Name</label>
                        <input type="text" name="lname" placeholder="Enter Last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label for="email">Email Address</label>
                        <input type="text " name="email" placeholder="Enter Email Address" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter new Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="image">Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue To Chat">
                    </div>
                
            </form>
            <div class="link">Already Signed up? <a href="login.php">Login Now</a></div>
        </section>
    </div>
    <script src="js/pass_toggle.js"></script>
    <script src="js/signupform.js"></script>
</body>
</html>