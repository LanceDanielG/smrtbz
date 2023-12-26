<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/login.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<body>
<div class="container">
    <nav>
        <div class="logo-containerL">
            <img src="../../public/img/logo-removebg-preview.png" alt="logo" class ="logo">
        </div>
        <ul class = "navbarClass">
            <li><a href="../../index.php">Home</a></li>
            <li><a href="developersInfo.php">Our Team</a></li>
            <li><a href="about.php">About Us</a></li>
            <li class="l"><a href="login.php">LOG IN</a></li>
            <li class="s"><a href="register.php">SIGN UP</a></li>
        </ul>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div class="container1">
        <form method="POST" action="../../middleware/auth/authenticate.php">
            <h3 style="text-align: center;"> LOG IN YOUR ACCOUNT</h3>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <span id="email-error" class="error-message"></span><br>
            <div class="password-wrap">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="button" id="toggle-password" onclick="togglePassword()">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </button>
                <span id="password-error" class="error-message"></span>
            </div>
            <br>
            <button class="b1" type="submit">Log In</button><br><br>
            <button class="b2" type="button" onclick="forgotPassword()">Forgot Password?</button>
        </form>
    </div>
</div>
</body>
<script src="../../public/js/index.js"></script>
<script src="../../public/js/login.js"></script>
</html>