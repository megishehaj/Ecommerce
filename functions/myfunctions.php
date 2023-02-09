<?php 
session_start();
include('./includes/config.php');

function getAll($table)
{
     global $conn;
     $query = "SELECT * from $table WHERE status='0'";
     return $query_run = mysqli_query($conn,$query);
}

function getAllTrending()
{
     global $conn;
     $query = "SELECT * from products WHERE trending ='1'";
     return $query_run = mysqli_query($conn,$query);
}

function getAllDiscount()
{
     global $conn;
     $query = "SELECT * from products WHERE selling_price !=''";
     return $query_run = mysqli_query($conn,$query);
}

function getByID($table,$id)
{
     global $conn;
     $query = "SELECT * from $table where id='$id' ";
     return $query_run = mysqli_query($conn,$query);
}

function getSlugActive($table,$slug)
{
     global $conn;
     $query = "SELECT * from $table where slug='$slug' AND status='0' LIMIT 1 ";
     return $query_run = mysqli_query($conn,$query);
}
function getProdbyCategoryLimit($category_id, $offset, $no_of_records_per_page)
{
     global $conn;
     $query = "SELECT * from products where category_id='$category_id' AND status='0' LIMIT $offset, $no_of_records_per_page";
     return $query_run = mysqli_query($conn,$query);
}
function redirect($url ,$message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}

function getProdbyCategorySearchLimit($search, $offset, $no_of_records_per_page)
{
     global $conn;
     $query = "SELECT * from products where name LIKE '%$search%' or description LIKE '%$search%' AND status='0' LIMIT $offset, $no_of_records_per_page";
     return $query_run = mysqli_query($conn,$query);
}
?>