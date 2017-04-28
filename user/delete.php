<?php 

$name = $_GET['name'];
exec("sudo userdel -rf $name", $res, $result);

if($result == "0"){
	echo "<script>alert('删除成功!!!');location='../index.php'</script>";
}else{
	echo "<script>alert('删除失败,请重试!!!');location='../index.php'</script>";
}

?>
