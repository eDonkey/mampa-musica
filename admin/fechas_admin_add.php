<?php
include '../lib/mysql/basic.config.mysql.php';
$text = $_POST['event_desc'];
$url = $_POST['event_url'];;
$from = strtotime($_POST['event_from']);
$to = strtotime($_POST['event_to']);
//echo "URL del video: ".$subject;
//echo "<br />";
//wecho "URL del thumb: ".$thumb;
$query = "INSERT INTO fechas SET text='$text', url='$url', start_showing='$from', end_showing='$to'";
die(var_dump($query));
//$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//if (!$link) {
//    echo "Error: Unable to connect to MySQL." . PHP_EOL;
//    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//    exit;
//}
//mysqli_query($link, $query) or die("Error executing query");
//header("Location: videos_admin.php?operation=video_add&result=success");
?>