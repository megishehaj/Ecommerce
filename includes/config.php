<?php
 
//Lidhja me databazen
$conn = mysqli_connect("localhost","root","","ecommerce");


if (!$conn) {
 die("Lidhja deshtoi: " . mysqli_connect_error());
}
 
?>