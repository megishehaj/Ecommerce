
<?php 
require('./functions/myfunctions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<?php include "includes/navbar.php"; ?>
<div class="find-us">
  <div class="container"><link rel="stylesheet" href="css/index.css">
    <div class="row">
      <div class="col-md-12">
          <div class="section-heading">
              <h2>Our Location On Maps</h2>
          </div>
      </div>
      <div class="col-md-8">
        <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.26656302358!2d19.812094000000002!3d41.3248166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13503106ce23ca25%3A0xefa6e52c8c15678f!2sRruga%20Myslym%20Shyri%2C%20Tiran%C3%AB!5e0!3m2!1sen!2s!4v1669395392689!5m2!1sen!2s" width="100%" height="330px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="col-md-4">
        <div class="left-content">
          <h4>Dyqani fizik</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, magnam voluptatem dolorum ratione itaque earum inventore. <br> <br> vel sint odit et corporis natus maxime recusandae in. Eligendi error fuga assumenda esse.</p>
          <ul class="social-icons">
            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-container">
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Adresa</div>
          <div class="text-one">Myslym Shyr,Tirane</div>
          <div class="text-two">Shqiperi</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+355 69 325 7579</div>
          <div class="text-two">+355 12 123 1234</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">MegiShehaj@gmail.com</div>
          <div class="text-two">megi.shehaj@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>Na kontaktoni per cdo problem.Pergjigjemi brenda 24h.</p>
      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
            <input type="text" placeholder="Shkruaj mesazhin tend">
        </div>
        <div class="button">
          <input type="button" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
  </div>
</div>
<footer>
        <div class="container" style="box-shadow: none!important;">
         <div class="sec aboutus">
          <h2>About Us</h2>
          <p>MANI BOUTIQUE është themeluar në vitin 2016, si një ndër të parët butike online në Shqipëri dhe që prej fillimit
            arritëm të bënim diferencën. Stili unik në veshje, gama e gjerë e produkteve dhe cilësia e pakontestueshme, 
            janë pikat e forta që na dallojnë dukshëm nga të tjerët.<br>
        
            NJË HERË KLIENTË TEK MANI, GJITHË JETËN KLIENTË TEK MANI- Kjo është moto jonë!.</p>
            <ul class="sci ">
              <li><a href="https://www.instagram.com/"><i class="fa-brands fa-facebook"></i></a></li>
              <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
              <li><a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok"></i></a></li>
             </ul>
         </div>
         <div class="sec quickLinks">
          <h2>Menu</h2>
          <ul style="padding-left: 0;">
            <li><a href="#">Kryefaqja</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
         </div>
         <div class="sec contact">
          <h2>Contact Info</h2>
        <ul class="info">
          <li>
            <span><i class="fa-solid fa-location-dot"></i></span>
            <p><a>Myslym Shyr,Tirane,<br>Shqiperi</a></p>
          </li>
          <li>
            <span><i class="fa-solid fa-phone"></i></span>
            <p><a href="tel:12345678000">+355 69 325 7579</a></p>
          </li>
          <li>
            <span><i class="fa-regular fa-envelope"></i></span>
            <p><a href="mailto:MegiShehaj@gmail.com">MegiShehaj@gmail.com</a></p>
          </li>
        </ul>
         </div>
        </div>
        </footer>
        <div class="copyrightText">
        <p>Copyright © 2022 Mani Boutique.</p>
        </div>
        <script src="js/header.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script> 
        <script src="js/index.js"></script>
        <script src="js/jquery.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

