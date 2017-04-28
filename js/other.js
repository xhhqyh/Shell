/**
 * @function 标签页程序
 * 2017/4/5
 * Qiyanhui
 */

/*添加用户的表单验证*/
 //验证用户名（为3~16个字符，且不能包含@和#号）
 function checkUserName(){
 	var name=document.getElementById("user-name").value.trim();
 	var nameRegex=/^[^@#]{3,16}$/;
 	if(!nameRegex.test(name)){
 		document.getElementById("nameInfo").innerHTML="<span style='color:red;'>用户名为3~16个字符，且不能包含”@”和“#“字符</span>";
 	}else{
 		document.getElementById("nameInfo").innerHTML="";
 		return true;
 	}
 }

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

 /*修改用户表单验证*/
 //验证密码（长度在4个字符到16个字符）
 function checkPassword1(){
 	var password1=document.getElementById("password1").value.trim();
 	var passwordRegex=/^[0-9A-Za-z_]\w{3,15}$/;
 	if(!passwordRegex.test(password1)){
 		document.getElementById("passwordInfo1").innerHTML="<span style='color:red;'>密码长度必须在4个字符到16个字符</span>";
 	}else{
 		document.getElementById("passwordInfo1").innerHTML="";
 	}
 }

 //校验密码
 function checkRepassword1(){
 	var repassword1=document.getElementById("repassword1").value.trim();
 	var password=document.getElementById("password1").value.trim();
 	if(repassword!==password1){
 		document.getElementById("repasswordInfo1").innerHTML="<span style='color:red'>两次输入的密码不一致</span>";
 	}else if(repassword==password){
 		document.getElementById("repasswordInfo1").innerHTML="";
 	}
 }

 //模态框
 function overlay(){
 	alert(1);
    var e1 = document.getElementById('modal-overlay');           
    e1.style.display =  (e1.style.display == "block"  ) ? "none" : "block";
}

 // 邮箱验证
 var btn = document.getElementById('submitBtn');
 btn.onclick = function(){
 	var nReg = /^[A-Za-z0-9\u4e00-\u9fa5]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
 	if (!nReg.test($("#mailname").val())) {
 		alert("请填写正确邮箱！！！");
 		return false;
 	};
 }
