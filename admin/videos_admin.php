<?php
$subject = $_GET['url'];
$search = 'https://www.youtube.com/watch?v=' ;
$trimmed = str_replace($search, '', $subject) ;
echo $trimmed ;
?>
