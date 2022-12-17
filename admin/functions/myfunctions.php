<?php 

session_start();
include('../includes/config.php');

function getAll($table)
{
     global $conn;
     $query = "SELECT * from $table";
     return $query_run = mysqli_query($conn,$query);
}

function getByID($table,$id)
{
     global $conn;
     $query = "SELECT * from $table where id='$id' ";
     return $query_run = mysqli_query($conn,$query);
}

function redirect($url ,$message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}
?>