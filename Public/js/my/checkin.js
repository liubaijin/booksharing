var conf = {
	username_minimum_char : 6,
	username_maximum_char : 15,
	password_minimum_char : 6,
	password_maximum_char : 30
}

function check_username(val){
	if (!val) return 1;
	if (val.length < conf.username_minimum_char) return 2;
	if (val.length > conf.username_maximum_char) return 3;
	
	for (var i = 0; i < val.length; i++) {
		if (!(val[i] >= '0' && val[i] <= '9') && !(val[i] >= 'a' && val[i] <= 'z') && !(val[i] >= 'A' && val[i] <= 'Z') && val[i] != '_') {
			//console.log(val[i]);
			return 4;
		}
	}
	return 0
}
function check_password(val){
	if (!val) return 1;
	if (val.length < conf.password_minimum_char) return 2;
	if (val.length > conf.password_maximum_char) return 3;
	
	for (var i = 0; i < val.length; i++) {
		if (!(val[i] >= '0' && val[i] <= '9') && !(val[i] >= 'a' && val[i] <= 'z') && !(val[i] >= 'A' && val[i] <= 'Z') && val[i] != '_') {
			//console.log(val[i]);
			return 4;
		}
	}
	return 0
}
function set_prompt_login(color, tips) {
	login_prompt.innerHTML = "<font color='" + color + "' size = '2'>" + tips + "</font>";
}
function set_prompt_register(color, tips) {
	register_prompt.innerHTML = "<font color='" + color + "' size = '2'>" + tips + "</font>";
}

$(document).ready(function(){
	var temp = String(window.location).split('#');
	type = temp[1];
	//alert(type);
	if (type == 'register') {
		$(".sign-in-form").hide();
        $(".register-form").show();
		
        document.title = '注册';
	} else {
		$(".register-form").hide();
        $(".sign-in-form").show();
        
        document.title = '登陆';
	}

	
    $(".form-header>span:last-of-type").click(function(){
        if($(this).text() === '注册'){
            $(".sign-in-form").hide();
            $(".register-form").show();

            var temp = String(window.location).split('#');
            window.location = temp[0] + '#register';
            
            document.title = '注册';
        }else{
            $(".register-form").hide();
            $(".sign-in-form").show();

            var temp = String(window.location).split('#');
            window.location = temp[0] + '#login';
            
            document.title = '登陆';
        }
        // 如果input的val为空，则清楚错误提示
        $(":input").each(function(index){
            if($(this).val().length === 0){
                //$(this).next().height(0).text();
            }
        })
    });
    // 注册表单的tips；不用slice(0,3)效果更佳
    $(".register-form input").focus(function(){ 
        var index = $(".register-form input").index($(this));

        $(".register-tips").hide().eq(index).show();
    });
    
    login_username_input.onblur = function() {
    	
    	
    };

    login_submit.onclick = function() {
    	//alert('dfkdl');
    	if (!login_username_input.value) {
    		//set_prompt_login('red', '请填入用户名和密码！');
    		alert('dfd');
    		return;
    	}
    	if (!login_password_input.value) {
    		set_prompt_login('gray', '密码只能由6字母、数字和下划线组成！');
    		return;
    	}
    	
		$.post(url_conf.loginCheck, {username:login_username_input.value, password:login_password_input.value},function(data,status) {
			if (status != 'success') {
				set_prompt_login('red', '登陆失败！');
				alert("连接错误！")
				return;
			}
			switch (data) {
			case 'yes':
				set_prompt_login('green', '登陆成功，正在跳转。。。');
				window.location = url_conf.home;
				break;
			case 'no_1':
				set_prompt_login('red', '用户名不存在！');
				break;
			case 'no_2':
				set_prompt_login('red', '密码错误！');
				break;
			default:
				set_prompt_login('red', '登陆失败！');
			}
		});
	};

    register_username_input.onfocus = function() {
    	set_prompt_register('gray', '用户名只能由 ' + conf.username_minimum_char + ' ~ ' + conf.username_maximum_char + ' 个 字母、数字和下划线组成！');
    	register_username_img_right.style.display = 'none';
    	register_username_img_wrong.style.display = 'none';
    };
    register_password_input.onfocus = function() {
    	set_prompt_register('gray', '密码只能由 ' + conf.password_minimum_char + ' ~ ' + conf.password_maximum_char + ' 个 字母、数字和下划线组成！');
    	register_password_img_right.style.display = 'none';
    	register_password_img_wrong.style.display = 'none';
    };
    register_repassword_input.onfocus = function() {
    	switch (check_password(register_password_input.value)) {
    	case 0: set_prompt_register('gray', '确认密码应与密码一致'); break;//return 0;
    	case 1:
    	case 2:
    	case 3:
    	case 4: set_prompt_register('red', '确认密码应与密码一致，请先填写正确的密码！'); break;
    	default: //return 5;
    	}
    	register_repassword_img_right.style.display = 'none';
    	register_repassword_img_wrong.style.display = 'none';
    };
	register_repassword_input.onblur = register_password_input.onblur = register_username_input.onblur = function() {
    	//alert('nimei');
    	switch (check_username(register_username_input.value)) {
    	case 0:
    		set_prompt_register('green', '用户名可用！');
    		register_username_img_right.style.display = 'block';
    		register_username_img_wrong.style.display = 'none';
    		break;//return 0;
    	case 1: set_prompt_register('red', '用户名不能为空！'); return 1;
    	case 2: set_prompt_register('red', '用户名不能小于' + conf.username_minimum_char + '个字符！'); return 2;
    	case 3: set_prompt_register('red', '用户名不能大于' + conf.username_maximum_char + '个字符！'); return 3;
    	case 4: set_prompt_register('red', '用户名只能由 字母、数字和下划线组成！'); return 4;
    	default: //return 5;//alert('nimei' + check_username(register_username_input.value) + 'jd');
    	}
    	//alert('nimei');
    	switch (check_password(register_password_input.value)) {
    	case 0: set_prompt_register('green', '密码可用！'); break;//return 0;
    	case 1: set_prompt_register('red', '密码不能为空！'); return 1;
    	case 2: set_prompt_register('red', '密码不能小于' + conf.password_minimum_char + '个字符！'); return 2;
    	case 3: set_prompt_register('red', '密码不能大于' + conf.password_maximum_char + '个字符！'); return 3;
    	case 4: set_prompt_register('red', '密码只能由字母、数字和下划线组成！'); return 4;
    	default: //return 5;
    	}
    	
    	if (!register_repassword_input.value) {
    		set_prompt_register('red', '请输入确认密码！');
    		return 1;
    	}
    	if (register_repassword_input.value != register_password_input.value) {
    		set_prompt_register('red', '确认密码与密码不一致！');
    		return 2;
    	}
    	set_prompt_register('green', '可尝试注册！');
    	return 0;
    };

    register_submit.onclick = function() {
    	if (!register_repassword_input.onblur()) {
    		set_prompt_register('green', '正在注册。。。');
    		$.post(url_conf.registerCheck, {username:register_username_input.value, password:register_password_input.value},function(data,status) {
    			if (status != 'success') {
    				set_prompt_register('red', '登陆失败！');
    				alert("连接错误！")
    				return;
    			}
    			switch (data) {
    			case 'yes':
    				set_prompt_register('green', '注册成功，正在跳转。。。');
    				window.location = url_conf.home;
    				break;
    			case 'no':
    				set_prompt_register('red', '用户名已存在！');
    				break;
    			default:
    				set_prompt_register('red', '登陆失败！');
    				alert(data);
    			}
    		});
    	}
    };
    
});














