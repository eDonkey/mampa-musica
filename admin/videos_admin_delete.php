<?php
include '../lib/mysql/basic.config.mysql.php';
session_start();
if(!isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
}
$id = $_GET['id'];
$query = "DELETE FROM videos WHERE id='$id' LIMIT 1";
//die(var_dump($query));
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_query($link, $query) or die("Error executing delete sentense. ".mysqli_error($link));
header("Location: videos_admin.php?operation=video_del&result=success");
?>
