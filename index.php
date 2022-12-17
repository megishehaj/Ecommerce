<?php include "includes/header.php"; 
include "includes/navbar.php";
?>

<!-- banner -->
<div class="banner">
  <div class="banner-inner-content">
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
    <h1>Buy and Enjoy</h1>
    <p>Happiness is an accident of nature,a beautiful and flawless aberration</p>
  </div>
</div>
<!-- Seksioni 1 -->
<div id="quote">
  <p>Shared memories inspire Mani Boutique creations and <br>
    reflect the emotional values we celebrate together at the <br>
    end of the year. Gestures of affection that stop time.</p>
</div>
<!-- Fund seksioni 1 -->
<hr style="width: 40px; border-top: 3px solid rgb(112, 3, 3); margin-left: 50%;">
<!-- seksioni 2 -->
<div class="section-heading">
  <h2>Produkte</h2>
  <a href="products.php">View all products <i class="fa fa-angle-right"></i></a>
</div>
<section>
<div class="product">
  <picture>
    <img src="images/card.jpg" alt="">
  </picture>
  <div class="detail">
    <p>
      <b>Pulover Oversize</b>
      <br>
      <small>ALL 2,000.00 Lek</small>
    </p>
  </div>
  <div class="buttonPrice">
      <p class="star">
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
    </p> 
    <a href="#">Shop now</a>
  </div>
</div>
<div class="product">
  <picture>
    <img src="images/card1.jpg" alt="">
  </picture>
  <div class="detail">
    <p>
      <b>Fustan Satin</b><br>
      <small>All 4,000.00 Lek</small>
    </p>
  </div>
  <div class="buttonPrice">
    <p class="star">
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
    </p>
    <a href="#">Shop now</a>
  </div>
</div>
<div class="product">
  <picture>
    <img src="images/card2.jpg" alt="">
  </picture>
  <div class="detail">
    <p>
      <b>Hoodie</b><br>
      <small>ALL 2,000.00 Lek</small>
    </p>
  </div>
  <div class="buttonPrice">
    <p class="star">
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
    </p>
    <a class="addcart" href="#">Shop now</a>
  </div>
</div>
<div class="product">
  <picture>
    <img src="images/card3.jpg" alt="">
  </picture>
  <div class="detail">
    <p>
      <b>Fund Satin</b><br>
      <small>ALL 2,300.00 Lek</small>
    </p>
  </div>
  <div class="buttonPrice">
    <p class="star">
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
    </p>
    <a href="#">Shop now</a>
  </div>
</div>
<div class="product">
  <picture>
    <img src="images/card.jpg" alt="">
  </picture>
  <div class="detail">
    <p>
      <b>Pulover Oversize</b>
      <br>
      <small>ALL 2,000.00 Lek</small>
    </p>
  </div>
  <div class="buttonPrice">
    <p class="star">
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
    </p>
    <a href="#">Shop now</a>
  </div>
</div>
<div class="product">
  <picture>
    <img src="images/card.jpg" alt="">
  </picture>
  <div class="detail">
    <p>
      <b>Pulover Oversize</b>
      <br>
      <small>ALL 2,000.00 Lek</small>
    </p>
  </div>
  <div class="buttonPrice">
    <p class="star">
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
    </p>
    <a href="#">Shop now</a>
  </div>
</div>
<div class="product">
  <picture>
    <img src="images/card.jpg" alt="">
  </picture>
  <div class="detail">
    <p>
      <b>Pulover Oversize</b>
      <br>
      <small>ALL 2,000.00 Lek</small>
    </p>
  </div>
  <div class="buttonPrice">
    <p class="star">
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
    </p>
    <a href="#">Shop now</a>
  </div>
</div>
<div class="product">
  <picture>
    <img src="images/card.jpg" alt="">
  </picture>
  <div class="detail">
    <p>
      <b>Pulover Oversize</b>
      <br>
      <small>ALL 2,000.00 Lek</small>
    </p>
  </div>
  <div class="buttonPrice">
    <p class="star">
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
      <strong>&star;</strong>
    </p>
    <a href="#">Shop now</a>
  </div>
</div>
</section>  
<!-- Fund seksioni 2 -->

<!-- Seksion 3-->
<div class="scrolling">
  <h2>Perfito <span id="ulje">15% ulje</span> duke bere Subscribe !</h2>
</div>
<!-- Fund seksion 3-->

<!-- seksion 4 -->
<div class="section-heading">
  <h2>Produkte me oferte</h2>
  <a href="#">View all products <i class="fa fa-angle-right"></i></a>
</div>
<section>
  <div class="product">
    <div class="product-discount"><span>-15%</span></div>
    <picture>
      <img src="images/card.jpg" alt="">
    </picture>
    <div class="detail">
      <p>
        <b>Pulover Oversize</b>
        <br>
        <small>ALL 2,000.00 Lek</small>
      </p>
    </div>
    <div class="buttonPrice">
      <p class="star">
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
      </p>
      <a href="#">Shop now</a>
    </div>
  </div>
  <div class="product">
    <div class="product-discount"><span>-15%</span></div>
    <picture>
      <img src="images/card1.jpg" alt="">
    </picture>
    <div class="detail">
      <p>
        <b>Fustan Satin</b><br>
        <small>All 4,000.00 Lek</small>
      </p>
    </div>
    <div class="buttonPrice">
      <p class="star">
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
      </p>
      <a href="#">Shop now</a>
    </div>
  </div>
  <div class="product">
    <div class="product-discount"><span>-15%</span></div>
    <picture>
      <img src="images/card2.jpg" alt="">
    </picture>
    <div class="detail">
      <p>
        <b>Hoodie</b><br>
        <small>ALL 2,000.00 Lek</small>
      </p>
    </div>
    <div class="buttonPrice">
      <p class="star">
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
      </p>
      <a class="addcart" href="#">Shop now</a>
    </div>
  </div>
  <div class="product">
    <div class="product-discount"><span>-15%</span></div>
    <picture>
      <img src="images/card3.jpg" alt="">
    </picture>
    <div class="detail">
      <p>
        <b>Fund Satin</b><br>
        <small>ALL 2,300.00 Lek</small>
      </p>
    </div>
    <div class="buttonPrice">
      <p class="star">
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
      </p>
      <a href="#">Shop now</a>
    </div>
  </div>
  <div class="product">
    <div class="product-discount"><span>-15%</span></div>
    <picture>
      <img src="images/card.jpg" alt="">
    </picture>
    <div class="detail">
      <p>
        <b>Pulover Oversize</b>
        <br>
        <small>ALL 2,000.00 Lek</small>
      </p>
    </div>
    <div class="buttonPrice">
      <p class="star">
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
      </p>
      <a href="#">Shop now</a>
    </div>
  </div>
  <div class="product">
    <div class="product-discount"><span>-15%</span></div>
    <picture>
      <img src="images/card.jpg" alt="">
    </picture>
    <div class="detail">
      <p>
        <b>Pulover Oversize</b>
        <br>
        <small>ALL 2,000.00 Lek</small>
      </p>
    </div>
    <div class="buttonPrice">
      <p class="star">
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
      </p>
      <a href="#">Shop now</a>
    </div>
  </div>
  <div class="product">
    <div class="product-discount"><span>-15%</span></div>
    <picture>
      <img src="images/card.jpg" alt="">
    </picture>
    <div class="detail">
      <p>
        <b>Pulover Oversize</b>
        <br>
        <small>ALL 2,000.00 Lek</small>
      </p>
    </div>
    <div class="buttonPrice">
      <p class="star">
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
      </p>
      <a href="#">Shop now</a>
    </div>
  </div>
  <div class="product">
    <div class="product-discount"><span>-15%</span></div>
    <picture>
      <img src="images/card.jpg" alt="">
    </picture>
    <div class="detail">
      <p>
        <b>Pulover Oversize</b>
        <br>
        <small>ALL 2,000.00 Lek</small>
      </p>
    </div>
    <div class="buttonPrice">
      <p class="star">
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
        <strong>&star;</strong>
      </p>
      <a href="#">Shop now</a>
    </div>
  </div>
  </section>  
<!-- fund seksion 4 -->

<!-- benefit -->
  <div class="benefit">
    <div class="container">
      <div class="row benefit_row">


        <div class="col-lg-3 benefit_col">
          <div class="benefit_item d-flex flex-row align-items-center">
           <div class="benefit_icon">
              <i class="fa fa-truck" aria-hidden="true"></i>
            </div>
              <div class="benefit_content">
                  <h6>Free Shiping</h6>
                  <p>Suffered Alteration is Some Form</p>
              </div>
          </div>
        </div>
        <div class="col-lg-3 benefit_col">
          <div class="benefit_item d-flex flex-row align-items-center">
           <div class="benefit_icon">
              <i class="fa fa-undo" aria-hidden="true"></i>
            </div>
              <div class="benefit_content">
                  <h6>30 days return</h6>
                  <p>Making it look like readable</p>
              </div>
          </div>
        </div>
        <div class="col-lg-3 benefit_col">
          <div class="benefit_item d-flex flex-row align-items-center">
           <div class="benefit_icon">
              <i class="fa-solid fa-money-bill" aria-hidden="true"></i>
            </div>
              <div class="benefit_content">
                  <h6>cash on delivery</h6>
                  <p>The internet tend to repeat</p>
              </div>
          </div>
        </div>
        <div class="col-lg-3 benefit_col">
          <div class="benefit_item d-flex flex-row align-items-center">
           <div class="benefit_icon">
              <i class="fa fa-clock" aria-hidden="true"></i>
            </div>
              <div class="benefit_content">
                  <h6>oppening all week</h6>
                  <p>8AM - 09PM</p>
              </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- fund benefit -->
 

<!-- blog -->
<div class="blogs">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section-title">
          <h2>Latest Blogs</h2>
        </div>
      </div>
    </div>
    <div class="row blogs_container">

      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(images/cover.jpg);"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-items-center text-center">
              <h4 class="blog-title">Trends we see coming this fall</h4>
              <span class="blog_meta">by admin | may 01, 2022</span>
              <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(images/cover.jpg);"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-items-center text-center">
              <h4 class="blog-title">Trends we see coming this fall</h4>
              <span class="blog_meta">by admin | may 01, 2022</span>
              <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(images/cover.jpg);"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-items-center text-center">
              <h4 class="blog-title">Trends we see coming this fall</h4>
              <span class="blog_meta">by admin | may 01, 2022</span>
              <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- fund blog -->

<!-- newsletter -->
<section id="newsletter">
  <div class="newstext">
    <h4>Sign Up For Newsletter</h4>
    <p>Get E-mail updates about our latest shop and <span>special offers</span></p>
  </div>
  <div class="form">
    <input type="text" placeholder="Your emil addres">
    <button class="normal">Sign Up</button>
  </div>
</section>

<?php include "includes/footer.php"; ?>