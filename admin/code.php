<?php

include('../includes/config.php');
include('../functions/myfunctions.php');

if (isset($_POST['add_category_btn'])) 
{
    $name= $_POST['name'];
    $slug= $_POST['slug'];
    $description= $_POST['description'];
    // $meta_title= $_POST['meta_title'];
    // $meta_description= $_POST['meta_description'];
    // $meta_keywords= $_POST['meta_keywords'];
    $status= isset($_POST['status']) ? '1':'0';
    $popular= isset($_POST['popular']) ? '1':'0';

    $image = $_FILES['image']['name'];
    $path = "../images";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    $cate_query = "INSERT INTO categories 
    (name,slug,description,status,popular,image) 
    VALUES ('$name','$slug','$description','$status','$popular','$filename')";

    $cate_query_run = mysqli_query($conn,$cate_query);
    if ($cate_query_run) 
    {
       move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

       redirect("add-category.php", "Category Added Successfully");
    }
    else
    {
        redirect("add-category.php", "Something went wrong");
    }
}
else if(isset($_POST['update_category_btn']))
{
    $category_id = $_POST['category_id'];
    $name= $_POST['name'];
    $slug= $_POST['slug'];
    $description= $_POST['description'];
    $status= isset($_POST['status']) ? '1':'0';
    $popular= isset($_POST['popular']) ? '1':'0';

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "")
    {
      // $update_filename = $new_image;
       $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
       $update_filename = time().'.'.$image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }
    $path = "../images";

    $update_query = "UPDATE categories SET name= '$name', slug='$slug', description='$description',
    status='$status',popular='$popular', image='$update_filename' WHERE id='$category_id'";

    $update_query_run = mysqli_query($conn,$update_query);

    if($update_query_run)
    {
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
            if(file_exists("../images/.$old_image"))
            {
                unlink("../images/.$old_image");
            }
        }
        redirect("edit-category.php?id=$category_id", "Category Updated Successfully");
    }
    else
    {
        redirect("edit-category.php?id=$category_id", "Something went wrong");
    }
}
else if(isset($_POST['delete_category_btn']))
{
   $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);

   $category_query = "SELECT * FROM categories WHERE id='$category_id' ";
   $category_query_run = mysqli_query($conn, $category_query);
   $category_data = mysqli_fetch_array($category_query_run);
   $image = $category_data['image'];

   $delete_query = "DELETE FROM categories WHERE id='$category_id' ";
   $delete_query_run = mysqli_query($conn,$delete_query);

   if($delete_query_run)
   { 
    if(file_exists("../images/".$image))
            {
                unlink("../images/".$image);
            }
    //redirect("category.php", "Category deleted successfully");
    echo 200;
   }
   else
   {
   // redirect("category.php", "Something went wrong");
   echo 500;
   }

}
else if (isset($_POST['add_product_btn']))
{
    $category_id = $_POST['category_id'];

    $name= $_POST['name'];
    $slug= $_POST['slug'];
    $small_description= $_POST['small_description'];
    $original_price= $_POST['original_price'];
    $selling_price= $_POST['selling_price'];
    $qty= $_POST['qty'];
    $status= isset($_POST['status']) ? '1':'0';
    $trending= isset($_POST['trending']) ? '1':'0';

    $image = $_FILES['image']['name'];

    $path = "../images";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    if($name != "" && $slug != "" && $small_description != "" && $original_price != "" && $qty != ""  && $image != "")
    {
        $product_query = "INSERT INTO products (category_id,name,slug,small_description,original_price,
        selling_price,qty,status,trending,image) VALUES ('$category_id',
        '$name','$slug','$small_description','$original_price','$selling_price','$qty','$status','$trending',
        '$filename')";
    
        $product_query_run = mysqli_query($conn, $product_query);
    
        if($product_query_run)
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
    
            redirect("add-products.php", "Product Added Successfully");
        }
        else
        {
            redirect("add-products.php", "Something went wrong");
        }
    }
    else
        {
            redirect("add-products.php", "All fields are required");
        }

}
else if(isset($_POST['update_product_btn']))
{
    $product_id = $_POST['product_id'];
    $category_id = $_POST['category_id'];

    $name= $_POST['name'];
    $slug= $_POST['slug'];
    $small_description= $_POST['small_description'];
    $original_price= $_POST['original_price'];
    $selling_price= $_POST['selling_price'];
    $qty= $_POST['qty'];
    $status= isset($_POST['status']) ? '1':'0';
    $trending= isset($_POST['trending']) ? '1':'0';

    $path = "../images";

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "")
    {
      // $update_filename = $new_image;
       $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
       $update_filename = time().'.'.$image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }
    
    $update_product_query = "UPDATE products SET category_id='$category_id',name= '$name', slug='$slug',small_description='$small_description',
     original_price='$original_price',selling_price='$selling_price',qty='$qty',status='$status',
    trending='$trending', image='$update_filename' WHERE id='$product_id'"; 
    $update_product_query_run = mysqli_query($conn,$update_product_query);

        if($update_product_query_run)
        {
            if($_FILES['image']['name'] != "")
            {
                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
                if(file_exists("../images/.$old_image"))
                {
                    unlink("../images/.$old_image");
                }
            }
            redirect("edit-product.php?id=$product_id", "Product Updated Successfully");
        }
        else
        {
            redirect("edit-product.php?id=$product_id", "Something went wrong");
        }
}
else if(isset($_POST['delete_products_btn']))
{
   $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);

   $product_query = "SELECT * FROM products WHERE id='$product_id' ";
   $product_query_run = mysqli_query($conn, $product_query);
   $product_data = mysqli_fetch_array($product_query_run);
   $image = $product_data['image'];

   $delete_query = "DELETE FROM products WHERE id='$product_id' ";
   $delete_query_run = mysqli_query($conn,$delete_query);

   if($delete_query_run)
   { 
        if(file_exists("../images/".$image))
        {
            unlink("../images/".$image);
        }

        // redirect("products.php", "Product deleted successfully");
        echo 200;
    }
   else
   {
    // redirect("products.php", "Something went wrong");
    echo 500;
   }
}
else
{
    header('Location: ../index.php');
}
?>