<?php 
include ('includes/header.php');
include ('includes/navbar.php');
include ('includes/pagination.php');

if(isset($_GET['slug'])){

$category_slug = $_GET['slug'];
$category_data = getSlugActive('categories',$category_slug);
$category = mysqli_fetch_array($category_data);


if($category){

$cid = $category['id'];
?>
<!-- <div class="py-5 mt-5"> -->
    <div class="container-fluid py-5 mt-5">
      <div class="row"> 
        <div class="row allproducts mx-auto container-fluid">
                <?php 
                $products = getProdbyCategory("$cid");
                
                if(mysqli_num_rows($categories) > 0){
                    foreach($products as $item)
                    {
                 ?>
                    <a href="product-view.php?product=<?= $item['slug']; ?>">
                    <div class="product col-lg-3 col-md-4 col-12">
                    <picture>
                        <img src="images/<?= $item['image']; ?>" alt="">
                    </picture>
                    <div class="detail">
                        <p>
                        <b><?= $item['name']; ?></b>
                        <br>                       
                         <?php
                      if(isset($item['selling_price'])){ ?>
                        <small><?= $item['selling_price']; ?></small>
                        <?php
                      }else { ?>
                        <small><?= $item['original_price']; ?></small>
                        <?php
                      }
                      ?>
                        </p>
                    </div>
                    </a>
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
                    <?php 
                        }
                    }
                    else{
                        echo "No data available";
                    }
                    ?>
            </div>
            <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
        </div> 
    </div>
<!-- </div> -->
  <?php 
       }
        else{
           echo "Error";
            }
} 
else{
    echo "Something went wrong";
    }
include ('includes/footer.php'); ?>

