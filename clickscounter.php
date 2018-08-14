<?php
include("lib/mysql/basic.config.mysql.php");
$cat = $_POST['cat'];
$id = $_POST['id'];
$query = "UPDATE $cat SET clicks = clicks + 1 WHERE id=$id LIMIT 1";
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_query($link, $query) or die("Error executing query");
?>