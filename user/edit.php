
 <html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Language" content="zh-CN" />
<meta name="roots" content="" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>PHP结合Shell对服务器的管理</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script type="text/javascript" src="../js/jquery-2.2.2.min.js"></script>
<script type="text/javascript" src="../js/Tab.js"></script>
<script type="text/javascript" src="../js/time.js"></script>

</head>
<body>
<div id="Tab">
	<div class="Menubox">
		<ul>
			<!-- onmouseover是鼠标移上去触发事件 -->
			<a href="../index.php" style="padding:8px 36px;margin-left: 10px;">返回首页</a>
			<li id="menu2">修改密码</li>
		</ul>
	</div>
	<div class="Contentbox">
		<!-- 查看用户 -->

		<div id="con_menu_1">
			<form action="./update.php" method="post">
				<p>
					用&nbsp;&nbsp;户&nbsp;&nbsp;名:
					<input type="text" name="user-name" required aria-required="true" disabled="true" value="<?php echo $_GET['name'];?>">
				</p>
				<p id="nameInfo"></p>
				<p>
					密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:
					<input type="password" name="password" required aria-required="true" id="password" onblur="checkPassword()" placeholder="请输入密码">
					<input type="hidden" name="nameedit" value="<?php echo $_GET['name']; ?>">
				</p>
				<p id="passwordInfo"></p>
				<p>
					重复密码:
					<input type="password" name="repassword" required aria-required="true" id="repassword" onblur="checkRepassword()" placeholder="请输入校验密码">
				</p>
				<p id="repasswordInfo"></p>
				
				<input type="submit" id="submituser" value="添加">
			</form>
		</div>
		
	<!-- 底部时间 -->
	<div class="footer">
		<p id = "timeP"></p>
	</div>
</div> 
</body>
<script type="text/javascript">
	//验证密码（长度在4个字符到16个字符）
	 function checkPassword(){
	 	var password=document.getElementById("password").value.trim();
	 	var passwordRegex=/^[0-9A-Za-z_]\w{3,15}$/;
	 	if(!passwordRegex.test(password)){
	 		document.getElementById("passwordInfo").innerHTML="<span style='color:red;'>密码长度必须在4个字符到16个字符</span>";
	 	}else{
	 		document.getElementById("passwordInfo").innerHTML="";
	 	}
	 }

	 //校验密码
	 function checkRepassword(){
	 	var repassword=document.getElementById("repassword").value.trim();
	 	var password=document.getElementById("password").value.trim();
	 	if(repassword!==password){
	 		document.getElementById("repasswordInfo").innerHTML="<span style='color:red'>两次输入的密码不一致</span>";
	 	}else if(repassword==password){
	 		document.getElementById("repasswordInfo").innerHTML="";
	 	}
	 }
</script>
</html>