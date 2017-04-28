<?php
/*
	*发送邮件管理文件
	*mail.php
	*QiYanHui 2017/4/4
*/

 $mailname = $_POST['mailname'];
 $mailtext = $_POST['mailtext'];
 $mailtitle = $_POST['mailtitle'];

/*执行shell脚本发送邮件*/
exec("/var/www/html/shell/sh/mail.sh $mailtext $mailtitle $mailname",$out,$res);

if($res == 0){
	echo "<script>alert('邮件发送成功!!!');location='./index.php';</script>";
}else{
	echo "<script>alert('邮件发送失败!!!,请重新发送');location='./index.php';</script>";
}
?>