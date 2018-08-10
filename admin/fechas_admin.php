<?php
include '../lib/mysql/basic.config.mysql.php';
if ($_GET['operation'] == "fecha_add" AND $_GET['result'] == "success") {
  echo "Date added correctly to our DB";
}
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
            <td><?php echo gmdate("Y-m-d - H:i:s", $row['start_showing']); ?></td>
            <td><?php echo gmdate("Y-m-d - H:i:s   ", $row['end_showing']); ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
    <div align="center">
        Agregar fecha <br /><br />
      <form method="post" action="fechas_admin_add.php">
        URL Del Evento (FB): <input type="text" name="event_url" id="event_url" /><br />
        Descripcion corta: <br />
          <textarea name="event_desc" id="event_desc" rows="20" cols="20v"></textarea><br />
          Visible desde <input type="text" id="event_from" name="event_from" placeholder="Y-m-d h:i:s" /> hasta <input type="text" name="event_to" id="event_to" placeholder="Y-m-d h:i:s" /><br />
          <input type="submit" />
      </form><br />
        Horario actual del servidor: <?php echo date('Y-m-d h:i:s'); ?>
    </div>
</section>
  </body>
</html>
