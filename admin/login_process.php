<?php
include '../lib/mysql/basic.config.mysql.php';
session_start();
if(isset($_SESSION['username'])) {
  header("Location: admin.php");
}
$username = $_POST['form-username'];
$password = hash('sha256', $_POST['form-password']);
die(var_dump($password));
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
