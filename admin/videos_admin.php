<?php
$subject = $_GET['url'];
$search = 'https://www.youtube.com/watch?v=' ;
$trimmed = str_replace($search, '', $subject) ;
echo "URL del video: ".$subject;
echo "<br />";
echo "URL del thumb: https://i.ytimg.com/vi/".$trimmed."/maxresdefault.jpg";
echo $trimmed ;
?>
