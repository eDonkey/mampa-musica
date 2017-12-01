<?php
include 'lib/mysql/basic.config.mysql.php';
$id = $_GET['id'];
$url = $_GET['url'];
$query = "UPDATE videos SET clicks = clicks + 1 WHERE id=$id LIMIT 1";
//die(var_dump($query));
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_query($link, $query) or die("Error executing update sentense. ".mysqli_error($link));
header("Location: ".$url);
?>
