var init = function() {
	var temp = String(window.location).split('#');
	type = temp[1];
	//alert(type);
	if (type == 'register') {
		right_register.style.display="block";	
	} else {
		right_sign_in.style.display="block";
	}
	
	/*
	var users = window.localStorage.getItem("users");
	if (!users) {
		//alert("fjld");
		//alert(users);
		//window.location = "register.html";
		window.localStorage.setItem("users", "");
		right_register.style.display="block";	
		//register_to_sign_in.style.visibility = "hidden";
	} else {
		right_sign_in.style.display="block";
		//alert("no");
		//window.location = "sign_in.html";
	}
	*/
}


var string_check = function(str) {
	for (var i = 0; i < str.length; i++) {
		if (!(str[i] >= '0' && str[i] <= '9' || str[i] >= 'a' && str[i] <= 'z' || str[i] >= 'A' && str[i] <= 'Z' || str[i] == '_'))
			return false;
	}
	return true;
}




$(document).ready(function() {
	

	about_btn.onclick = function() {

		event.cancelBubble  = true;
		event.returnValue = false;

		about_window_panel.style.left = (window.innerWidth - 400) / 2 + 'px';
		about_window_panel.style.top = (window.innerHeight - 300) / 2 + 'px';
		about_window_panel.style.zIndex = '1000';
		about_window_panel.style.display = 'block';
		console.log('width' + (window.innerWidth - about_window_panel.offsetWidth) / 2 + 'px');
		console.log((window.innerHeight - about_window_panel.offsetHeight) / 2 + 'px');
	};
	about_window_panel.onclick = function() { 
		event.cancelBubble  = true;
		event.returnValue = false;
	};
	about_back.onclick = function() {
		about_window_panel.style.display = 'none';
	};


	register_user_name.onkeyup = function() {
		if (string_check(register_user_name.value) && register_user_name.value.length >= 6) {
			register_user_name_prompt.innerHTML = "<font color='green' size='1px'>可用<font>";
		} else {
			register_user_name_prompt.innerHTML = "<font color='grey' size='1px'>由字母、数字和下划线组成, 且不少于5个字符</font>";
		}
	};
	register_user_name.onblur = function() {
		if (register_user_name.value.length < 6) {
			register_user_name_prompt.innerHTML = "<font color='red' size='1px'>用户名不得少于6个字符</font>";
		}
		if (!string_check(register_user_name.value)) {
			register_user_name_prompt.innerHTML = "<font color='red' size='1px'>用户名只能由字母、数字和下划线组成<font>";
		}
	};
	
	register_password.onkeyup = function() {
		if (string_check(register_password.value) && register_password.value.length >= 6) {
			register_password_prompt.innerHTML = "<font color='green' size='1px'>可用<font>";
		} else {
			register_password_prompt.innerHTML = "<font color='grey' size='1px'>由字母、数字和下划线组成, 且不少于5个字符</font>";
		}
	};
	register_password.onblur = function() {
		if (register_password.value.length < 6) {
			register_password_prompt.innerHTML = "<font color='red' size='1px'>用户名不得少于6个字符</font>";
		}
		if (!string_check(register_password.value)) {
			register_password_prompt.innerHTML = "<font color='red' size='1px'>用户名只能由字母、数字和下划线组成<font>";
		}
	};
	register_repassword.onfocus = function() {
		register_repassword_prompt.innerHTML = "";
	}
	register_repassword.onblur = function() {
		if (!(string_check(register_password.value) && register_password.value.length >= 6)) return;
		
		if (register_repassword.value == register_password.value) {
			register_repassword_prompt.innerHTML = "<font color='green' size='1px'>一致<font>";
		} else {
			register_repassword_prompt.innerHTML = "<font color='red' size='1px'>确认密码不一致！<font>";
		}
	}

	sign_in_user_name.onfocus = function() {
		sign_in_user_name_prompt.innerHTML = "";
	};
	sign_in_password.onfocus = function() {
		sign_in_password_prompt.innerHTML = "";
	};
	sign_in_password.onkeydown = function() {
		if (event.keyCode == 13)
			sign_in_submit.onclick();
	};
	var is_enable = true;
	register_to_sign_in.onclick = function() {
		if (!is_enable) return;
		is_enable = false;

		$(right_register).css("-webkit-animation", "display_to_none 0.5s cubic-bezier(1,0.3,1,1)");

		setTimeout(function() {
			right_register.style.display='none';
			right_sign_in.style.display='block';
			$(right_register).css("-webkit-animation", "");
			$(right_sign_in).css("-webkit-animation", "none_to_display 0.5s cubic-bezier(0.3,1,1,1)");
			setTimeout(function() {
				$(right_sign_in).css("-webkit-animation", "");
				is_enable = true;
			}, 500);
		}, 500);
		var temp = String(window.location).split('#');
		window.location = temp[0] + '#login';
	};
	sign_in_to_register.onclick = function() {
		if (!is_enable) return;
		is_enable = false;
		$(right_sign_in).css("-webkit-animation", "display_to_none 0.5s  cubic-bezier(1,0.3,1,1)");
		setTimeout(function() {
			right_sign_in.style.display='none';
			right_register.style.display='block';
			$(right_sign_in).css("-webkit-animation", "");
			$(right_register).css("-webkit-animation", "none_to_display 0.5s cubic-bezier(0.3,1,1,1)");
			setTimeout(function() {
				$(right_register).css("-webkit-animation", "");
				is_enable = true;
			}, 500);
		}, 500);
		var temp = String(window.location).split('#');
		window.location = temp[0] + '#register';
	};
	register_submit.onclick = function() {
		if (!string_check(register_user_name.value)) {
			register_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>用户名只能由字母、数字和下划线组成<font>";
			return;
		}
		if (register_user_name.value.length < 6) {
			register_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>用户名不得少于6个字符</font>";
			return;
		}
		if (!string_check(register_password.value)) {
			register_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>密码只能由字母、数字和下划线组成<font>";
			return;
		}
		if (register_password.value.length < 6) {
			register_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>密码不得少于6个字符</font>";
			return;
		}
		if (register_password.value != register_repassword.value) {
			register_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>确认密码不一致！<font>";
			return;
		}
		
		//var arguments = 
		$.post(register_url,
			{
				username:register_user_name.value,
				password:register_password.value
			},
			function(data, status){
			if (status != 'success') {
				register_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>注册失败！<font>";
				alert("连接错误！")
				return;
			}
			//alert(data);
			switch (data) {
			case 'yes':
				register_submit_prompt.innerHTML = "<br/><font color='green' size='1px'>注册成功！<font>";
				window.location = home_url;
				break;
			case 'no':
				register_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>用户已存在！<font>";
				return;
			default:
				register_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>注册失败！<font>";
			}
		    //alert("Data: " + data + "\nStatus: " + status);
		 });
		/*
		var users = window.localStorage.getItem("users");
		users = String(users).split(',');
		//alert(users + "****" + users.length);
		
		for (var i = 0; i < users.length; i++) {
			if (register_user_name.value == users[i]) {
				register_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>用户已存在！<font>";
				return;
			}
		}

		register_submit_prompt.innerHTML = "<br/><font color='green' size='1px'>注册成功！<font>";

		users[users[0] ? users.length : 0] = register_user_name.value;
		window.localStorage.setItem("users", users);
		window.localStorage.setItem(register_user_name.value, register_password.value);
		
		window.sessionStorage.setItem("current_user", register_user_name.value);
		//window.location = "main.html";
		*/
		
	};
	sign_in_submit.onclick = function() {
		if (!sign_in_user_name.value) {
			sign_in_user_name_prompt.innerHTML = "<font color='red' size='1px'>不能为空！<font>";
			return;
		}
		
		$.post(login_url,
			{
				username:sign_in_user_name.value,
				password:sign_in_password.value
			},
			function(data, status){
			if (status != 'success') {
				sign_in_password_prompt.innerHTML = "<br/><font color='red' size='1px'>登陆失败！<font>";
				alert("连接错误！")
				return;
			}
			//alert(data);
			switch (data) {
			case 'yes':
				sign_in_submit_prompt.innerHTML = "<br/><font color='green' size='1px'>登陆成功！<font>";
				window.location = home_url;
				break;
			case 'no_1':
				sign_in_user_name_prompt.innerHTML = "<font color='red' size='1px'>用户不存在！<font>";
				return;
			case 'no_2':
				sign_in_password_prompt.innerHTML = "<font color='red' size='1px'>密码错误！<font>";
				return;
			default:
				sign_in_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>登陆失败！<font>";
			}
		    //alert("Data: " + data + "\nStatus: " + status);
		 });
		/*
		var users = window.localStorage.getItem("users");
		users = String(users).split(',');
		for (var i = 0; i < users.length; i++) {
			if (sign_in_user_name.value == users[i]) {
					if (window.localStorage.getItem(sign_in_user_name.value) != sign_in_password.value) {
						sign_in_password_prompt.innerHTML = "<font color='red' size='1px'>密码错误！<font>";
						return;
					}
				window.sessionStorage.setItem("current_user", sign_in_user_name.value);
				window.location = "main.html";
				return;
			}
		}
		sign_in_user_name_prompt.innerHTML = "<font color='red' size='1px'>用户不存在！<font>";
		*/
	};

	document.body.onclick = function() {
		if (about_window_panel.style.display == 'block');
			about_window_panel.style.display = 'none';
		//alert(about_window_panel.style.display);
	};

	init();
	//alert(registerurl);
});