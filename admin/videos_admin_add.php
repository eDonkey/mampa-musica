<?php
include '../lib/mysql/basic.config.mysql.php';
$subject = $_GET['url'];
$search = 'https://www.youtube.com/watch?v=' ;
$trimmed = str_replace($search, '', $subject) ;
$thumb = "https://i.ytimg.com/vi/".$trimmed."/hqdefault.jpg";
//echo "URL del video: ".$subject;
//echo "<br />";
//wecho "URL del thumb: ".$thumb;
$query = "INSERT INTO videos SET youtube_key='$trimmed', video='$subject', thumb='$thumb'";
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
mysqli_query($link, $query) or die("Error executing query");
header("Location: videos_admin.php?operation=video_add&result=success");
?>
