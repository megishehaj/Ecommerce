<?php 
session_start();

if (isset($_SESSION['auth'])) 
{
    $_SESSION['message'] = "You are already logged in";
    header('Location:index.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login-register.css">
    <title></title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form action="functions/authcode.php" class="sign-in-form" method="POST">
                <h2 class="title">Sign in</h2>
                <?php
                if (isset($_SESSION['message']))
                {  ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                     <strong>Hello!</strong> <?= $_SESSION['message']; ?>.
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                unset($_SESSION['message']);
                }
                ?>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <input type="submit" name="login_btn" value="Sign in" class="btn">
                <p class="account-text">Don't have an account? <a href="registration.php" id="sign-in-btn2">Sign up</a></p>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script> 
    <script src="js/jquery.js"></script> 
</body>

</html>