<?php
include 'connect.php';
if (isset($_POST['log_email'])) {
    $email = $_POST['log_email'];
    $password = $_POST['log_pass'];

    $sql = "SELECT * FROM account WHERE email = '$email'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
    $checkEmail = mysqli_num_rows($query);
    if ($checkEmail == 1) {
        $checkpass = password_verify($password, $data['Password']);
        if ($checkpass == true) {
            $_SESSION['data_user'] = $data;
            header('location: ../index.php');
        } else {
            echo "<script>
                alert('Password wrong!');
                window.location = '../page/page-login.php#form-login';
            </script>";
        }
    } else {
        echo "<script>
                alert('Email donot exist!');
                window.location = '../page/page-login.php#form-login';
            </script>";
    }
}
?>