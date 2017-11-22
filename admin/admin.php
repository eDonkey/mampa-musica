<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
} else {
  echo "$_SESSION['username']";
}
?>
