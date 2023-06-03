<?php
include '../../database/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $string = "DELETE FROM products WHERE Id = '$id'";
    $sql = mysqli_query($conn, $string);

    header('location:../products.php');
    die();

} else {
    echo 'not found';
}

?>