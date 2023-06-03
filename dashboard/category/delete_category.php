<?php
include '../../database/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $string = "DELETE FROM category WHERE Id = '$id'";
    $sql = mysqli_query($conn, $string);

    $stringProduct = "DELETE FROM products WHERE CategoryId = '$id'";
    $sqlProduct = mysqli_query($conn, $stringProduct);
    header('location:../categories.php');
    die();

} else {
    echo 'not found';
}

?>