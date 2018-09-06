<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
} else {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mampa - Musica | Admin Dashboard</title>
          <link rel="stylesheet" href="body.css">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  </head>
  <body>
    <!--<div id="gradient" /> -->
    <div id="admin-top-menu" align="center"><br /><br />
      Inicio --
        <a href="news_admin.php" target="adminframe">Noticias</a> --
        <a href="users_admin.php" target="adminframe">Usuarios</a> --
        <a href="videos_admin.php" target="adminframe">Videos</a> --
        <a href="fechas_admin.php" target="adminframe">Fechas</a> --
        <a href="http://104.236.175.157/analytics/piwik/index.php?module=Widgetize&action=iframe&moduleToWidgetize=Dashboard&actionToWidgetize=index&idSite=1&period=week&date=yesterday" target="adminframe">Estadisticas</a>
        <?php if ( $_SESSION['permissions'] >= '755' ) { ?>
         -- <a href="config_admin.php" target="adminframe">Config</a>
         -- <a href="file-browser/index.html" target="adminframe">Fotos</a>
        <?php } ?>
    </div>
    <br /><br />
    <div id="admin-body-loader" align="center">
      <iframe name="adminframe" width="1280px" height="620px" border="2" src="http://104.236.175.157/analytics/piwik/index.php?module=Widgetize&action=iframe&moduleToWidgetize=Dashboard&actionToWidgetize=index&idSite=1&period=week&date=yesterday"></iframe>
    </div>
    <div style="position:fixed;right:0;bottom:0;">
      <a href="logout.php"><img src="imgs/logout.png" border="0" width="64px" height="64px" /></a>
    </div>
  </body>
  <script  src="js/body.js"></script>
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.backstretch.min.js"></script>
  <script src="assets/js/scripts.js"></script>
</html>
<?php } ?>
