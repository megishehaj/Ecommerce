<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/entry.css">
</head>
<body>
    <div class="header">
        <div class="logo">
             <a href="#"><img src="images/Logo.png"></a>
        </div>
        <div class="icons">
            <a href="login.php" class="fa-solid fa-user"></a>
        </div>
      </div>

      
      <div class="banner">
      <?php
   if (isset($_SESSION['message']))
    {  
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Hello!</strong> <?= $_SESSION['message']; ?>.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    unset($_SESSION['message']);
     }
     ?>
      <div class="banner-inner-content">
        <h1>Welcome to Mani Boutique</h2>
        <h4>You have to log in for access</h4>
        </div>
      </div>
    <script src="js/header.js"></script>
</body>
</html>