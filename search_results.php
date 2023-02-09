<?php 
include ('includes/header.php');
include ('includes/navbar.php');
if(isset($_GET['search'])){
    $search = $_GET['search'];
if($search){
?>
<!-- <div class="py-5 mt-5"> -->
<div class="container py-5 mt-5">
    <div class="row">
        <?php 
                 //pagination
                 if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 4;
                $offset = ($pageno-1) * $no_of_records_per_page;

                $total_pages_sql = "SELECT COUNT(*) FROM products";
                $result = mysqli_query($conn,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);
        
                //get all products
                $products = getProdbyCategorySearchLimit($search,$offset, $no_of_records_per_page);
                
                if(mysqli_num_rows($products) > 0){
                    foreach($products as $item){ ?>

        <div class="col-md-3 col-sm-12 mb-4 ">
            <div class="m-1 product">
                <a href="#">
                    <picture>
                        <img src="images/<?= $item['image']; ?>" alt="">
                    </picture>
                    <div class="detail">
                        <b><?= $item['name']; ?></b><br>
                        <?php
                                        if(isset($item['selling_price'])){ ?>
                        <small><?= $item['selling_price']; ?></small>
                        <?php }else { ?>
                        <small><?= $item['original_price']; ?></small>
                        <?php }
                                    ?>
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
                    <span>Shop now</span>
                </div>
            </div>
        </div>
        <?php 
                        }
                    }
                    else{
                        echo "No data available";
                    }
                    ?>
        <ul class="pagination">
            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                <a
                    href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>&search=<?php echo $search; ?>">Prev</a>
            </li>
            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                <a
                    href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>&search=<?php echo $search; ?>">Next</a>
            </li>
        </ul>
    </div>
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