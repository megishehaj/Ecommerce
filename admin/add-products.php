<?php 

include('../middleware/adminMiddleware.php');
include('includes/header.php');

?>

<div class="container">
  <div class="row">
     <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Product</h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="POST" enctype="multipart/form-data" >
                     <div class="row">
                    <div class="col-md-12">
                        <label for="">Select Category</label>
                        <select name= "category_id" class="form-select mb-2">
                            <option selected>Select Category</option>
                            <?php 
                               $categories = getALL("categories");
                               if(mysqli_num_rows($categories) > 0)
                               {
                                foreach ($categories as $item) {
                                    ?>
                                         <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                                    <?php
                                 }
                               }
                               else
                               {
                                  echo "No category available";
                               }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="mb-0">Name</label>
                        <input type="text" required name="name" placeholder="Enter Product Name" class="form-control mb-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mb-0">Slug</label>
                        <input type="text" required name="slug" placeholder="Enter slug" class="form-control mb-2">
                    </div>
                    <div class="col-md-12">
                        <label class="mb-0">Small description</label>
                        <textarea rows="3" required name="small_description" placeholder="Enter small_description" class="form-control mb-2"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="mb-0">Original price</label>
                        <input type="text" required name="original_price" placeholder="Enter Original price" class="form-control mb-2">
                    </div>
                    <div class="col-md-6">
                        <label class="mb-0">Selling price</label>
                        <input type="text" name="selling_price" placeholder="Selling price" class="form-control mb-2">
                    </div>
                    <div class="col-md-12">
                        <label class="mb-0">Upload Image</label>
                        <input type="file" required name="image" class="form-control mb-2">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="mb-0">Quantity</label>
                            <input type="number" required name="qty" placeholder="Enter quantity" class="form-control mb-2">
                        </div>
                        <div class="col-md-3">
                            <label class="mb-0">Status</label> <br>
                            <input type="checkbox" name="status">
                        </div>
                        <div class="col-md-3">
                            <label class="mb-0">Trending</label> <br>
                            <input type="checkbox" name="trending">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" name="add_product_btn">Save</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
     </div>
  </div>
</div>

<?php include('includes/footer.php') ?>