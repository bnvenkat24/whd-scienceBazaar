<?php
error_reporting(0);
session_start();
if ($_SESSION['logged_in'] == false) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/sign-up-masters-in-cash-300x300.png" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" action= "login.php" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term"/>
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="https://www.facebook.com/"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://twitter.com/login"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://www.google.com/intl/en-GB/gmail/about/#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="sign-up.php" class="signup-image-link">Create an account</a><br>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php
}
else{
    header('Location: ../index.php');
}
if (isset($_POST['signin'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "whd";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $email = $_POST['email'];
    $password = sha1($_POST['your_pass']);


    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ? LIMIT 1");
    $stmt->bind_param("ss", $email, $password);
    //execute the statement
    $stmt->execute();

    $stmt->bind_result($fname, $lname, $email, $password);
    $stmt->store_result();




    if ($stmt->num_rows == 1)  //To check if the row exists
    {
        if ($stmt->fetch()) //fetching the contents of the row
        {
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            
            header("Location: ../index.php");
            exit();
        }
    }
     else {
        header("Location: ../contact.html");
    }
    $stmt->close();
$conn->close();

}