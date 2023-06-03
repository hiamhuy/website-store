<?php
require 'connect.php';
if (isset($_POST['reg_firstname'])) {
    $fistname = $_POST['reg_firstname'];
    $lastname = $_POST['reg_lastname'];
    $email = $_POST['reg_email'];
    $password = $_POST['reg_password'];
    $phonenumber = $_POST['reg_phonenumber'];
    $type = 1;

    //encode the password
    $_pass = password_hash($password, PASSWORD_DEFAULT);
    $stringQuery = "INSERT INTO account (firstname, lastname, email, password, phonenumber, type)
            VALUES ('$fistname','$lastname','$email', '$_pass','$phonenumber',$type)";

    $query = mysqli_query($conn, $stringQuery);

    if ($query) {
        echo '<script type="text/javascript">
            alert("Sign Up Success!");
            window.location= "../page/page-login.php#form-login";
        </script>';
        // header('location:../page/page-login.php#form-login');
    }
}
?>