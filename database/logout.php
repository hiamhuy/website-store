<?php
include 'connect.php';
if (isset($_SESSION['data_user'])) {
    //delete all 
    //session_destroy();
    unset($_SESSION['data_user']);
    header('location:../index.php');
}
?>