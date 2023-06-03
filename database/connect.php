<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection error" . $conn->connect_error);
}
if (!isset($_SESSION)) {
    session_start();
}

?>