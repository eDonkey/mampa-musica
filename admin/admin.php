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
      Inicio - <a href="news_admin.php" target="adminframe">Noticias</a>
    </div>
    <br /><br />
    <div id="admin-body-loader" align="center">
      <iframe name="adminframe" width="1280px" height="720px" border="2"></iframe>
    </div>
    <div style="position:fixed;right:0;bottom:0;">
      <a href="logout.php"><img src="imgs/logout.png" border="0" /></a>
    </div>
  </body>
</html>
<?php } ?>
