<?php 
	$name = $_POST['nameedit'];
	$pass = $_POST['password'];
	//修改密码
	exec("echo $name:$pass|sudo chpasswd", $res, $result);
	if($result == "0"){
		echo "<script>alert('修改成功');location='../index.php'</script>";
	}else{
		echo "<script>alert('修改失败,请重试!!!');location='../index.php'</script>";
	}
 ?>
