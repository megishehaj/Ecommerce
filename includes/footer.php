  <footer class="pt-5 pb-5">
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-sm-12">
                  <div class="sec aboutus">
                      <h2>About Us</h2>
                      <p>MANI BOUTIQUE është themeluar në vitin 2016, si një ndër të parët butike online në 
                        Shqipëri dhe arritëm të bënim diferencën. Gama e gjerë e 
                        produkteve dhe cilësia e pakontestueshme, janë pikat e forta që na dallojnë dukshëm 
                        nga të tjerët.<br>

                          NJË HERË KLIENTË TEK MANI, GJITHË JETËN KLIENTË TEK MANI- Kjo është moto jonë!.</p>
                      <ul class="d-flex w-100 justify-content-start p-0 sci">
                          <li class="p-1"><a href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram"></i></a></li class="p-1">
                          <li class="p-1"><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li class="p-1">
                          <li class="p-1"><a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok"></i></a></li> 
                      </ul>
                  </div>
              </div>
              <div class="col-md-4 col-sm-12">
                  <div class="sec quickLinks">
                      <h2>Menu</h2>
                      <ul style="padding-left: 0;">
                          <li><a href="index.php">Kryefaqja</a></li>
                          <li><a href="contact.php">Contact Us</a></li>
                          <li><a href="about.php">About</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-4 col-sm-12">
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
          </div>



      </div>
  </footer>
  <div class="copyrightText">
      <p>Copyright © 2022 Mani Boutique.</p>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/index.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/header.js"></script>
  <script src="./js/custom.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
  <!-- Alertify Js -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>

    alertify.set('notifier','position', 'top-right');
  <?php if(isset($_SESSION['message'])) 
  { 
    ?>
    alertify.success('<?= $_SESSION['message'];?>');
    <?php 
   unset($_SESSION['message']);   
  } 
    ?>
</script>

</body>

  </html>