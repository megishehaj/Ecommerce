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
          <div class="row pt-5 pb-5 mt-5">
         <div class="col-md-4">
            <div class="shadow" width="300px">
                <img class="rounded-3" src="images/<?= $product['image']; ?>" alt="Product Image" width="300px"
                    height="350px">
            </div>
        </div>
        <div class="col-md-8">
            <h4 class="fw-bold"><?= $product['name']; ?>
                <span class="float-end text-danger"><?php if( $product['trending']){echo "Trending"; }?></span>
            </h4>
            <hr>
            <h6>Product description:</h6>
            <p><?= $product['small_description']; ?></p>
            <div class="row">
                <div class="col-md-6">
                    <h5><span class="text-success fw-bold"><?= $product['selling_price']; ?> <?php if( $product['selling_price']){echo "All"; }?></span> </h5>
                </div>
                <div class="col-md-6">
                    <h5  class="<?php echo ($product['selling_price'] === null) ? "text-success fw-bold dicsount-product" : "text-danger fw-bold dicsount-product "; ?>" > 
                        <span class= "me-1" <?php if($product['selling_price'] === null) echo 'class="text-success first-price"'; ?>><?= $product['original_price'];?></span> All 
                        <!-- <s class="text-danger"> </s> -->
                    </h5>
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
                    <button class="btn btn-primary px-4 addToCartBtn" value="<?= $product['id'];?>"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</button>
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


// test 
else{
    echo "Something went wrong";
    }
include ('includes/footer.php'); ?>