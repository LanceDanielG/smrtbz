<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../../public/css/style.css">
    <link rel="stylesheet" href="../../public/css/register.css">
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
            <form id="form">
                <h1>CREATE NEW ACCOUNT</h1>

                <div class="input-control">
                    <input id="fname" name="fname" type="text" placeholder="First name" required>              
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <input id="lname" name="lname" type="text" placeholder="Last name"  required>
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <input id="email" name="email" type="text" placeholder="Email" required>
                    <p id="emailinuse" style="display: none; color: red; font-size: 10px;">Email already in use!</p>
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <input id="password"name="password" type="password" placeholder="Password" required>
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <div class="password-wrap">
                        <input id="password2" name="password2" type="password" placeholder="Re-enter Password" required> 
                        <button type="button" id="toggle-password" onclick="togglePassword()">
                        <i class="fa fa-eye" aria-hidden="true"></i></button>         
                        <div class="error"></div>
                    </div>
                </div>
                <div class="input-control">
                    <div class="radio1">
                        <select name="account-type" id="account-type">
                            <option value="" selected>--Select Account Type--</option>
                            <option value="starter">Starter Account</option>
                            <option value="franchiser">Franchiser</option>
                        </select>
                        <div class="error"></div>
                    </div>
                </div>
                
                <button class="btn1" type="button" id="submit">Sign Up</button><br><br>
                <a href="login.php">Already Have an Account?</a>
            </form>
        </div>
    </div>
</body>
<?php include "../../middleware/toastr.php"; ?>
<!-- Bootstrap JS and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../public/js/index.js"></script>
<script src="../../public/js/register.js"></script>
</html>