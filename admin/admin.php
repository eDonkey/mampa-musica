<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
} else {
  echo "hola";
  die(var_dump($_SESSION));
}
?>
