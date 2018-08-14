
<?php
$mysqlfile = file_get_contents('../lib/mysql/basic.config.mysql.php');
?>
<form method="post" action="">
<textarea name="mysql_config_text"><?php echo $mysqlfile; ?></textarea>
    <input type="submit" value="save" />
</form>