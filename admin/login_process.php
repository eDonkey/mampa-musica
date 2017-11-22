<?php
include '../lib/mysql/basic.config.mysql.php';
session_start();
if(isset($_SESSION['username'])) {
  header("Location: admin.php");
}
$time = time();
die(var_dump($time));
$username = $_POST['form-username'];
$password = hash('sha256', $_POST['form-password']);
$query = "SELECT * FROM user WHERE email='$username' AND password='$password' LIMIT 1";
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_array($result);
  $_SESSION['username'] = $row['email'];
  $_SESSION['name'] = $row['name'];
}
?>
