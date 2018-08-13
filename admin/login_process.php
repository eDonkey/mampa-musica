<?php
include '../lib/mysql/basic.config.mysql.php';
session_start();
if(isset($_SESSION['username'])) {
    header("Location: admin.php");
}
//$time = time();
$username = $_POST['form-username'];
$password = hash('sha256', $_POST['form-password']);
$query = "SELECT * FROM users WHERE email='$username' AND password='$password' LIMIT 1";
$updateLogintime = "UPDATE users set last_login = NOW() WHERE `email`='$username' LIMIT 1";
//die(var_dump($query));
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) == 1) {
  //$lastloginquery = "UPDATE users SET last_login=$time WHERE email='$username' AND password='$password' LIMIT 1";
  //die(var_dump($lastloginquery));
    $row = mysqli_fetch_array($result);
    $_SESSION['username'] = $row['email'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['permissions'] = $row['permissions'];
    mysqli_query($link, $updateLogintime);
    header("Location: admin.php");
} else {
    echo "login failed";
    die();
}
?>
