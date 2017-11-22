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
    <div id="admin-top-menu" align="center">
      Inicio - <a href="news_admin.php" target="admin_page_loader">Noticias</a>
    </div>
    <br /><br />
    <div id="admin-body-loader" align="center">
      <iframe id="admin-page-loader" name="admin-page-loader" width="1280px" height="720px" border="2"></iframe>
    </div>
  </body>
</html>
<?php } ?>
