<?php 

session_start();
include('./includes/config.php');

function getAll($table)
{
     global $conn;
     $query = "SELECT * from $table WHERE status='0'";
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
function getProdbyCategory ($category_id)
{
     global $conn;
     $query = "SELECT * from products where category_id='$category_id' AND status='0'";
     return $query_run = mysqli_query($conn,$query);
}
function redirect($url ,$message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}
?>