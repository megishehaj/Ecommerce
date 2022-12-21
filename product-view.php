<?php 
include ('includes/header.php');
include ('includes/navbar.php');

if(isset($_GET['product'])){
     $product_slug = $_GET['product'];
     $product_data = getSlugActive('products',$product_slug);
     $product = mysqli_fetch_array($product_data);

     if($product){
         ?>
         <div class="container product_data pt-5">
            <div class="row pt-5 pb-3 mt-5">
                <div class="col-md-4">
                    <div class="shadow">
                    <img class="rounded-3" src="images/<?= $product['image']; ?>" alt="Product Image" width="360px" height="400px">
                    </div>
                </div>
                <div class="col-md-8">
                    <h4 class="fw-bold"><?= $product['name']; ?>
                    <span class="float-end text-danger"><?php if( $product['trending']){echo "Trending"; }?></span>
                </h4>
                    <hr>
                    <h6>Product description:</h6>
                    <p><?= $product['description']; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <h5> All <s class="text-danger"><?= $product['original_price'];?> </s></h5>
                        </div>
                        <div class="col-md-6">
                            <h5> All <span class="text-success fw-bold"><?= $product['selling_price']; ?></span></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group mb-3" style="width:130px">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" class="form-control text-center input-qty bg-white" value="1" disabled>
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                         <div class="col-md-6">
                            <button class="btn btn-primary px-4"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
                         </div>
                         <div class="col-md-6">
                            <button class="btn btn-danger px-4"><i class="fa fa-heart me-2"></i>Add to Wishlist</button>
                         </div>
                    </div>
                </div>
            </div>
         </div>
         <?php
     }
     else{
        echo "Product not found";
        }
} 
else{
    echo "Something went wrong";
    }
include ('includes/footer.php'); ?>