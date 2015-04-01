<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>注册-图库</title>
		<link rel="stylesheet" type="text/css" href="css/my/checkin.css" media="all" />
		<script type="text/javascript" src="js/lib/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="js/my/checkin.js"></script>
		<script>
			//alert("dlfj");
		var login_url = "<?php echo U('home/checkin/login');?>";
		var register_url = "<?php echo U('home/checkin/register');?>";
		var home_url = "<?php echo U('home/index/index');?>";
		</script>
	</head>
	<body>
	<div id="page">
		<div id="left">
			<div>我的个人相册</div>
			<img src='img/album.jpg'/>
			<div id='about_panel'>
				<div id='about_animation'>
					<marquee direction='right'>
						》》》
					</marquee>
				</div>
				<div id='about_btn'>
					关于
				</div>
				<div id='about_window_panel'>
					关于:<br/>
					运行要求：<br/>
1.请将此项目置于服务器上运行，说明：有些特性需要配合服务器才能使用，localStorage、sessionStorage等。<br/>
2.请通过较新版本的谷歌浏览器访问，说明：此项目适配谷歌浏览器，期末由于时间较紧迫，未能考虑到兼容问题，望见谅！<br/><br/>

其他:<br/>
1.入口为：index.html<br/>
2.需注册才能使用，注册相关信息与浏览器绑定，只能在该浏览器有效。<br/>
					</p>
					<div id='about_back'>
						关闭
					</div>
				</div>
			</div>
		</div>
		<div id="right_register">
			<div id="login_label"><h3>注册</h3></div>

			<div>
				<img src="img/login_user.jpg"/>
				<input type="text" id="register_user_name" placeholder=" 用户名"/>
				<div id="register_user_name_prompt" class="register_input_prompt"><font color='grey' size='1px'>由字母、数字和下划线组成, 且不少于5个字符</font></div>
			</div>
			<div>
				<img align="middle" src="img/login_password.jpg"/>
				<input type="password" id="register_password" placeholder=" 密码"/>
				<div id="register_password_prompt" class="register_input_prompt"><font color='grey' size='1px'>由字母、数字和下划线组成, 且不少于5个字符</font></div>
			</div>
			<div>
				<img align="middle" src="img/login_password.jpg"/>
				<input type="password" id="register_repassword" placeholder=" 确认密码"/>
				<div id="register_repassword_prompt" class="register_input_prompt"></div>
			</div>
			<div>
				<input type="submit" id="register_to_sign_in" class="btn_submit" value="登陆">
				<input type="submit" id="register_submit" class="btn_submit" value="注册">
				<div id="register_submit_prompt" class="register_input_prompt"></div>
			</div>
		</div>
		<div id="right_sign_in">
			<div id="login_label"><h3>登陆</h3></div>

			<div>
				<img src="img/login_user.jpg"/>
				<input type="text" id="sign_in_user_name" placeholder=" 用户名"/>
				<div id="sign_in_user_name_prompt" class="login_input_prompt"></div>
			</div>
			<div>
				<img align="middle" src="img/login_password.jpg"/>
				<input type="password" id="sign_in_password" placeholder=" 密码"/>
				<div id="sign_in_password_prompt" class="login_input_prompt"></div>
			</div>
			<div>
				<input type="submit" id="sign_in_to_register" class="btn_submit" value="注册">
				<input type="submit" id="sign_in_submit" class="btn_submit" value="登陆">
				<div id="sign_in_submit_prompt" class="sign_in_input_prompt"></div>
			</div>
		</div>

	</div>
	</body>
	<script>
	</script>
</html>