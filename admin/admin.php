<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
} else {
  //echo "hola";
  //die(var_dump($_SESSION));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mampa - Musica | Admin Dashboard</title>
  </head>
  <body>
    <div id="admin-top-menu">
      Inicio - Noticias
    </div>
    <br /><br />
    <div id="admin-body-loader">
      <iframe id="admin-page-loader" name="admin-page-loader" width="500px" height="500px" border="2"></iframe>
    </div>
  </body>
</html>
<?php } ?>
