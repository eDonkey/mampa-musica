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
          <link rel="stylesheet" href="body.css">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  </head>
  <body>
    <div id="gradient" />
    <div id="admin-top-menu" align="center"><br /><br />
      Inicio - <a href="news_admin.php" target="adminframe">Noticias</a> - <a href="users_admin.php" target="adminframe">Usuarios</a>
    </div>
    <br /><br />
    <div id="admin-body-loader" align="center">
      <iframe name="adminframe" width="1280px" height="620px" border="2"></iframe>
    </div>
    <div style="position:fixed;right:0;bottom:0;">
      <a href="logout.php"><img src="imgs/logout.png" border="0" width="64px" height="64px" /></a>
    </div>
  </body>
  <script  src="js/body.js"></script>
</html>
<?php } ?>
