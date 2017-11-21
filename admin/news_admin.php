<?php
if (isset($_POST)){
   if (!empty($_POST['area3'])) {
        //Save File
        $file = fopen("news.html","r+");
        $text = $_POST["area3"];
        if (file_put_contents($file, $text)) {
          echo "OK";
          fclose($file);
        } else {
          echo "Writing error";
        }
        fclose($file);
    }
}
?>
<html>
  <head>
    <title>Demo 1 : Convert All Textareas</title>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script src="../js/nicEdit/nicCore/bkLib.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicCore/nicConfig.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicCore/nicCore.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicCore/nicInstance.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicCore/nicIFrameInstance.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicCore/nicPanel.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicCore/nicButton.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicCore/nicPlugin.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicPane/nicPane.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicSelect/nicSelect.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicButtonTips/nicButtonTips.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicAdvancedButton/nicAdvancedButton.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicLink/nicLink.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicImage/nicImage.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicCode/nicCode.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicColors/nicColors.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicXHTML/nicXHTML.js" type="text/javascript"></script>
    <script src="../js/nicEdit/nicBBCode/nicBBCode.js" type="text/javascript"></script>
    <script type="text/javascript">
    bkLib.onDomLoaded(function() {
      nicEditors.allTextAreas()
    });
    </script>
  </head>
  <body>
    <div id="menu"></div>
    <br />
    <div id="sample">
      <form method="post" action="news_admin.php">
      <h4>Third Textarea</h4>
      <textarea name="area3" style="width: 900px; height: 300px;">
        <?php
        echo file_get_contents('news.html');
        ?>
      </textarea>
      <input type="submit" value="Save" />
    </form>
    </div>
  </body>
</html>
