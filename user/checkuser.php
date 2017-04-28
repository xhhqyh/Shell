<?php 
/*
	*用户是否被注册的验证文件
	*2017/4/5 23:43
	*Qiyanhui

*/

$username = $_POST['user-name'];
$password = $_POST['password'];

//判断该用户是否已经存在
$usercheck = "/var/www/html/shell/sh/checkuser.sh $username";
$result = exec($usercheck,$out);
if($result=="000"){
	echo "<script>alert('该用户已存在!!!');location='../index.php'</script>";
}else{
	//添加用户
	exec("sudo useradd $username", $res, $prv);
	//给该用户添加密码
    system("/var/www/html/shell/sh/adduser.sh $password $username", $res1);
    //判断是否添加成功
	if($prv=="0" && $res1=="0"){
		echo "<script>alert('创建成功!!!');location='../index.php'</script>";
	}else{
		echo "<script>alert('创建失败!!!');location='../index.php'</script>";
	}
}

 ?>