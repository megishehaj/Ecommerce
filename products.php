<?php 
include ('includes/header.php');
include ('includes/navbar.php');
$category_slug = $_GET['slug'];
$category_data = getBySlugActive('categories',$category_slug);
$category = mysqli_fetch_array($category_data);
$cid = $category['id'];
?>
<div class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <?php 
                $products = getProdbyCategory("$cid");
                if(mysqli_num_rows($categories) > 0){
                    foreach($products as $item)
                    {
            ?>
            <section>
                <a href="#"></a>
                    <div class="product">
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
            <?php 
                }
            }
            else{
                echo "No data available";
            }
            ?>
        </div>
    </div>
</div>

<?php 
include ('includes/footer.php');
?>

