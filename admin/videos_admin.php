<?php
include '../lib/mysql/basic.config.mysql.php';
if ($_GET['operation'] == "video_add" AND $_GET['result'] == "success") {
  echo "Video added correctly to our DB";
}
if ($_GET['operation'] == "video_del" AND $_GET['result'] == "success") {
  echo "Video deleted correctly from our DB";
}
session_start();
if(!isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
}
$query = "SELECT * FROM videos";
$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$result = mysqli_query($link, $query);
?>
<html>
  <head>
    <title>Videos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body background="white">
    <div align="center">
      <form method="post" action="videos_admin_add.php">
        Video URL (Solo youtube): <input type="text" name="video_url" id="video_url" /><input type="submit" value="Cargar" />
      </form>
    </div>
    <section>
  <!--for demo wrap-->
    <h1>Usuarios</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Youtube Key</th>
            <th>Video</th>
            <th>Imagen</th>
            <th>Clicks</th>
            <th>Acciones</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
<?php
while ($row = mysqli_fetch_array($result)) {
  ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['youtube_key']; ?></td>
            <td><a href="open_video.php?url=<?php echo $row['video']; ?>&id=<?php echo $row['id']; ?>" target="_blank">>>LINK HERE<<</a></td>
            <td><img src="<?php echo $row['thumb']; ?>" width="84" height="47" /></td>
            <td><?php echo $row['clicks']; ?></td>
            <td><a href="videos_admin_delete.php?id=<?php echo $row['id']; ?>"><img src="imgs/delete.png" border="0" width="24" height="24" /></a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</section>
  </body>
</html>
