<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Language" content="zh-CN" />
<meta name="roots" content="" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>PHP结合Shell对服务器的管理</title>
<link rel="stylesheet" type="text/css" href="./css/style.css">
<script type="text/javascript" src="./js/jquery-2.2.2.min.js"></script>
<script type="text/javascript" src="./js/Tab.js"></script>
<script type="text/javascript" src="./js/time.js"></script>
<script type="text/javascript" src="./js/ajax.js"></script>

</head>
<body>
<div id="Tab">
	<div class="Menubox">
		<ul>
			<!-- onmouseover是鼠标移上去触发事件 -->
			<li id="menu1" onclick="setTab('menu',1,5)" class="hover">查看用户</li>
			<li id="menu2" onclick="setTab('menu',2,5)" >添加用户</li>
			<li id="menu3" onclick="setTab('menu',3,5)" >系统重启</li>
			<li id="menu4" onclick="setTab('menu',4,5)" >网络配置</li>
			<li id="menu5" onclick="setTab('menu',5,5)" >发送邮件</li>
		</ul>
	</div>
	<div class="Contentbox">
		<!-- 查看用户 -->

		<div id="con_menu_1" class="hover">
			<table border="1px" width="100%">
				<tr>
					<th>用户名</th>
					<th>修改密码</th>
					<th>删除用户</th>
				</tr>
				<!-- 查看用户数据 -->
				<?php 
					exec("/var/www/html/shell/sh/view.sh", $res);
					for($i=0; $i<count($res); $i++){
						echo "<tr>";
						echo "<td>$res[$i]</td>";
						echo "<td><a href='./user/edit.php?name={$res[$i]}'>修改密码</a></td>";
						echo "<td><a href='./user/delete.php?name={$res[$i]}'>删除用户</a></td>";
						echo "</tr>";
					}
				 ?>
			</table>

			<!-- 模态框 -->
			<div id="modal-overlay"> 
		        <div class="modal-data" id="modal-data">
		            <button id="x" onclick="overlay()">x</button>
		            <p>请输入您的新密码</p>
		            <form action="./user/edit.php" method="post">
		            	<p>
							用&nbsp;&nbsp;户&nbsp;&nbsp;名:
							<input type="text" name="user-name1" required aria-required="true" value="<?php echo $_GET['name']; ?>">
						</p>
						<p id="nameInfo1"></p>
						<p>
							密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:
							<input type="password" name="password1" required aria-required="true" id="password1" onblur="checkPassword1()" placeholder="请输入密码">
						</p>
						<p id="passwordInfo1"></p>
						<p>
							重复密码:
							<input type="password" name="repassword1" required aria-required="true" id="repassword1" onblur="checkRepassword1()" placeholder="请输入校验密码">
						</p>
						<p id="repasswordInfo1"></p>
						
						<input type="submit" id="submituser" value="修改">
		            </form>
		        </div>
		    </div>

		</div>
		<!-- 添加用户 -->
		<div id="con_menu_2" style="display:none">
			
			
			<form action="./user/checkuser.php" method="post">
				<p>
					用&nbsp;&nbsp;户&nbsp;&nbsp;名:
					<input type="text" name="user-name" required aria-required="true" id="user-name" onblur="checkUserName()" placeholder="请输入用户名">
				</p>
				<p id="nameInfo"></p>
				<p>
					密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:
					<input type="password" name="password" required aria-required="true" id="password" onblur="checkPassword()" placeholder="请输入密码">
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
		<!-- 系统重启 -->
		<div id="con_menu_3" style="display:none">
			<ul>
				<li>·<a href="#">系统重启</a></li>
			</ul>
		</div>
		<!-- 网络配置 -->
		<div id="con_menu_4" style="display:none">
			<?php 
				exec("ifconfig", $val);
				for($j=0; $j<count($val); $j++){
					echo "$val[$j]";
					echo "<br>";
				}
			

			 ?>
		</div>
		<!-- 发送邮件 -->
		<div id="con_menu_5" style="display:none">
			<form action="mail.php" method="post">
				<p>
					<span>收件人：</span>
					<input type="text" required aria-required="true" name="mailname" id="mailname">
				</p>
				<p>
					<h3>内容：</h3>
					<textarea rows="10" required aria-required="true" cols="100" name="mailtext"></textarea>
				</p>
				<p>
					<h3>主题：</h3>
					<input type="text" required aria-required="true" name="mailtitle" id="">
				</p>
				<input type="submit" name="submitBtn" id="submitBtn" value="发送">
			</form>
		</div>
	</div>
	<!-- 底部时间 -->
	<div class="footer">
		<p id = "timeP"></p>
	</div>
</div> 
<!-- 邮件部分的表单内容验证 -->
<script type="text/javascript" src="./js/other.js"></script>	
</body>

</html>