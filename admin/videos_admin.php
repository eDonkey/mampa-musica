<?php
$subject = $_GET['url'];
$search = 'https://www.youtube.com/watch?v=' ;
$trimmed = str_replace($search, '', $subject) ;
$thumb = "https://i.ytimg.com/vi/".$trimmed."/hqdefault.jpg";
echo "URL del video: ".$subject;
echo "<br />";
echo "URL del thumb: ".$thumb;

?>
