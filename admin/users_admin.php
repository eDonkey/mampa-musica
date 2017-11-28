<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
} else {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Listado de usuarios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <section>
  <!--for demo wrap-->
    <h1>Usuarios</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Creado en...</th>
            <th>Ultimo login</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>
          <tr>

          </tr>
          <tr>

          </tr>
          <tr>

          </tr>
          <tr>

          </tr>
          <tr>

          </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
        <tr>

        </tr>
      </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
<?php } ?>
