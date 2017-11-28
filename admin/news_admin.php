<?php
session_start();
if(!isset($_SESSION['username'])) {
  header("location: index.php");
  exit;
} else {
  //echo "hola";
  //die(var_dump($_SESSION));
  $newsfile = "../news.html";
  if (isset($_POST)){
    if (!empty($_POST['area3'])) {
      $handle = fopen($newsfile, 'w') or die('Cannot open file:  '.$newsfile);
      $data = $_POST['area3'];
      fwrite($handle, $data) or die('error al escribir');
      }
    }
?>
<html>
  <head>
    <title>Editor de noticias</title>
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
  <body style="background:white;">
    <div id="menu"></div>
    <br />
    <div id="sample">
      <form method="post" action="news_admin.php">
      <h2 align="center">Editor de Noticias</h2>
      <textarea align="center" name="area3" style="width: 550px; height: 310px;border:2px solid black;">
        <?php
        echo file_get_contents('../news.html');
        ?>
      </textarea>
      <br /><br />
      <input type="submit" value="Save" style="border-top:2px solid #a3ceda;border-left:2px solid #a3ceda;border-right:2px solid #4f6267;border-bottom:2px solid #4f6267;padding:10px 20px !important;font-size:14px !important;background-color:#c4f1fe;font-weight:bold;color:#2d525d;" />
    </form>
    </div>
  </body>
</html>
<?php } ?>
