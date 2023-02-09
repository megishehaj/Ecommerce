<?php 
include "includes/header.php"; 
include "includes/navbar.php";
?>

<!-- banner -->
<div class="banner">
    <div class="banner-inner-content text-center">
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
        <p>Happiness is an accident of nature,a beautiful and flawless aberration</p> -->
    </div>
</div>
<!-- Seksioni 1 -->
<div id="quote">
    <p>Shared memories inspire Mani Boutique creations and <br>
        reflect the emotional values we celebrate together at the <br>
        end of the year. Gestures of affection that stop time.</p>
</div>
<!-- Fund seksioni 1 -->
<hr class="break-hr">
<!-- seksioni 2 -->
<div class="section-heading">
    <h2>Trending</h2>
    <!-- <a href="products.php">View all products <i class="fa fa-angle-right"></i></a> -->
</div>
<div class="row allproducts">
    <?php
            $trendingProducts = getAllTrending();
            if(mysqli_num_rows($trendingProducts)> 0)
            {
                foreach($trendingProducts as $item){
    ?>
    <div class="col-lg-3 col-md-4 col-12 ">
        <div class="m-1 product">
            <a href="product-view.php?product=<?= $item['slug']; ?>" class="product_link">
                <picture>
                    <img src="images/<?= $item['image']; ?>" alt="">
                </picture>
                <div class="detail">
                    <p>
                        <b><?= $item['name']; ?></b><br>
                        <small><?= $item['original_price']; ?> All</small>
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
                    <span>Shop now</span>
                </div>
            </a>
        </div>
    </div>
    <?php
                    }
                }
            ?>

</div>
<!-- Fund seksioni 2 -->

<!-- Seksion 3-->
<div class="scrolling">
    <h2>Perfito <span id="ulje">15% ulje</span> duke bere Subscribe !</h2>
</div>
<!-- Fund seksion 3-->

<!-- seksion 4 -->
<div class="section-heading">
    <h2>Oferta</h2>
    <!-- <a href="#">View all products <i class="fa fa-angle-right"></i></a> -->
</div>
<div class="row allproducts">
<?php
            $discountProducts = getAllDiscount();
            if(mysqli_num_rows($discountProducts)> 0)
            {
                foreach($discountProducts as $item){
    ?>
    <div class="col-lg-3 col-md-4 col-12 ">
        <div class="m-1 product">
            <div class="product-discount"><span>-15%</span></div>
            <a href="product-view.php?product=<?= $item['slug']; ?>" class="product_link">
                <picture>
                    <img src="images/<?= $item['image']; ?>" alt="">
                </picture>
                <div class="detail">
                        <b><?= $item['name']; ?></b>
                </div>
                <div class="row">
                        <div class="col-md-6">
                            <h5> All <s class="text-danger"><?= $item['original_price'];?> </s></h5>
                        </div>
                        <div class="col-md-6">
                            <h5> All <span class="text-success fw-bold"><?= $item['selling_price']; ?></span></h5>
                        </div>
                    </div>
                 <div class="buttonPrice">
                    <p class="star">
                        <strong>&star;</strong>
                        <strong>&star;</strong>
                        <strong>&star;</strong>
                        <strong>&star;</strong>
                        <strong>&star;</strong>
                    </p>
                    <span>Shop now</span>
                </div>
            </a>
        </div>
    </div>
    <?php
                    }
                }
            ?>
</div>

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