<?php 
//require('functions/myfunctions.php');
include('includes/header.php');
include('includes/navbar.php');

if (isset($_POST['message_btn'])) 
{
   $name = mysqli_real_escape_string($conn,$_POST['name']);
   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $message = mysqli_real_escape_string($conn,$_POST['message']);

   if($name != "" && $email != "" && $message != "")
    {
        $contact_query = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
    
        $contact_query_run = mysqli_query($conn, $contact_query);
    
        if($contact_query_run)
        {
            redirect("contact.php", "Message send successfully");
        }
    }
    else
    {
        redirect("contact.php", "All fields are required");
    }
}
?>
<!-- banner -->
<!-- <div class="banner">
    <div class="banner-inner-content text-center"> -->
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
        <!-- <h1>Buy and Enjoy</h1>
        <p>Happiness is an accident of nature,a beautiful and flawless aberration</p>
    </div> -->
</div>
<div class="find-us">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-sm-12 mb-3">
                <div class="section-heading">
                    <h2>Our Location On Maps</h2>
                </div>
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.26656302358!2d19.812094000000002!3d41.3248166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13503106ce23ca25%3A0xefa6e52c8c15678f!2sRruga%20Myslym%20Shyri%2C%20Tiran%C3%AB!5e0!3m2!1sen!2s!4v1669395392689!5m2!1sen!2s"
                        width="100%" height="330px" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-flex mb-3 align-items-center">
                <div class="left-content">
                    <h4>Dyqani fizik</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, magnam voluptatem dolorum
                        ratione itaque earum inventore. <br> <br> vel sint odit et corporis natus maxime recusandae in.
                        Eligendi error fuga assumenda esse.</p>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mb-5">

            <div class="col-md-4 col-sm-12">
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
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                    <p>Na kontaktoni per cdo problem.Pergjigjemi brenda 24h.</p>
                    <form action="contact.php" method="POST">
                        <div class="input-box">
                            <input type="text" name="name" placeholder="Enter your name">
                        </div>
                        <div class="input-box">
                            <input type="text" name="email" placeholder="Enter your email">
                        </div>
                        <div class="input-box message-box">
                            <input type="text" name="message" placeholder="Shkruaj mesazhin tend">
                        </div>
                        <div class="button">
                            <input type="submit" name="message_btn" value="Send Now" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>
<script src="js/header.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/index.js"></script>
<script src="js/jquery.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>