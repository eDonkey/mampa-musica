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
die(var_dump($query));
?>
