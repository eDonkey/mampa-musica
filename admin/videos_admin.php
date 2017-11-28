<?php
if ($_GET['operation'] == "video_add" AND $_GET['result'] == "success") {
  echo "Video added correctly to our DB";
}
?>
<html>
  <head>
    <title>Videos</title>
  </head>
  <body>
    <form method="post" action="videos_admin_add.php">
      Video URL (Solo youtube): <input type="text" name="video_url" id="video_url" /><input type="submit" value="Cargar" />
    </form>
  </body>
</html>
