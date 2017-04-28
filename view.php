<?php 
/*
	*查看用户信息文件view.php
	*2017/4/3
	*QiYanHui
*/

exec("/var/www/html/shell/sh/view.sh", $res);
echo "<pre>";
print_r($res);
echo "</pre>";






 ?>