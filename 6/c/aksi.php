<?php
include "../config.php";
if (isset($_POST['submitTambah'])) {
    $product = $_POST['product'];
    $cashier = $_POST['cashier'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $q = "INSERT into product values('','$product','$price','$category','$cashier')";
    mysqli_query($connect, $q);
} else if (isset($_POST['submitEdit'])) {
    $id = $_POST['id'];
    $product = $_POST['product'];
    $cashier = $_POST['cashier'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $q = "UPDATE product
    SET name = '$product', price = '$price', id_category='$category',id_cashier='$cashier' WHERE id='$id';";
    mysqli_query($connect, $q);
} else if (isset($_POST['deleteProduct'])) {
    $id = $_POST['id'];
    $q = "DELETE FROM product WHERE id='$id';";
    mysqli_query($connect, $q);
}
header("Location:index.php");
