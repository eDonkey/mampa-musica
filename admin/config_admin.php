
<?php
$mysqlfile = file_get_contents('../lib/mysql/basic.config.mysql.php');
?>
<form method="post" action="">
<textarea name="mysql_config_text" style="width: 1267px; height: 587px;"><?php echo $mysqlfile; ?></textarea>
    <input type="submit" value="save" />
</form>