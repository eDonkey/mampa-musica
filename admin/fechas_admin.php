<?php
include '../lib/mysql/basic.config.mysql.php';
session_start();
if(!isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
}
$query = "SELECT * FROM fechas";
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
    <section>
  <!--for demo wrap-->
    <h1>Fechas</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Texto</th>
            <th>URL Del Evento</th>
            <th>Visible desde</th>
            <th>Visible Hasta</th>
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
            <td><?php echo $row['text']; ?></td>
            <td><?php echo $row['url']; ?></td>
            <td><?php echo gmdate("Y-m-d\TH:i:s\Z", $row['start_showing']); ?></td>
            <td><?php echo gmdate("Y-m-d\TH:i:s\Z", $row['end_showing']); ?></td>
            <td><a href="videos_admin_delete.php?id=<?php echo $row['id']; ?>"><img src="imgs/delete.png" border="0" width="24" height="24" /></a></td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
</section>
  </body>
</html>
