<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/lib/normalize.css">
        <link rel="stylesheet" href="css/my/init.css">
        <link rel="stylesheet" href="css/my/common.css">
        <link rel="stylesheet" href="css/my/checkin.css">
        <script src="js/lib/modernizr-2.8.3.min.js"></script>
        <script src="js/lib/jquery-2.1.3.min.js"></script>
        <script src="js/my/checkin.js"></script>
		<script type="text/javascript">
			var url_conf = {
				registerCheck: <?php echo "'".U('home/checkin/registerCheck')."'"; ?>,
				loginCheck: <?php echo "'".U('home/checkin/loginCheck')."'"; ?>,
				home:<?php echo "'"."/booksharing"."'";?>
			};
		</script>
    </head>
    <body>

        <main id="main" class="">
            <section class="top container">
                <ul class="inspiring">
                    <li>
                        <!-- <img src="img/banner-bg.jpg" alt="" /> -->
                        <p>读书是为了遇见更好的自己</p>
                    </li>
                </ul>
                <div class="sign-in-and-register">
                    <div class="sign-in-form">
                        <p class="form-header clearfix">
                            <span>登录 享·书</span>
                            <span>注册</span>
                        </p>
                        <form action="">
                            <input type="text" placeholder="昵称/享·书帐号/email" class="login-username" id="login_username_input"/>
                            <input type="password" placeholder="密码" class="login-password" id="login_password_input"/>
                            <div id='login_prompt'><font color='red' size='3'></font></div>
                            <input id='login_submit' type="button" value="登录  "/>
                        </form>
                    </div>
                    <div class="register-form">
                        <p class="form-header clearfix">
                            <span>注册 享·书</span>
                            <span>登录</span>
                        </p>
                        <form action="">
                        	<div class='left-float-right-abs'>
                            	<input type="text" placeholder="昵称" class="nickname" id="register_username_input"/>
                            	<img id='register_username_img_right' src="img/isright.png"/>
                            	<img id='register_username_img_wrong' src="img/iswrong.png"/>
                            </div>
                            <div class='left-float-right-abs'>
                            	<input type="password" placeholder="密码" class="login-password" id="register_password_input"/>
                            	<img id='register_password_img_right' src="img/isright.png"/>
                            	<img id='register_password_img_wrong' src="img/iswrong.png"/>
                            </div>
                            <div class='left-float-right-abs'>
                            	<input type="password" placeholder="确认密码" class="login-password" id="register_repassword_input"/>
                            	<img id='register_repassword_img_right' src="img/isright.png"/>
                            	<img id='register_repassword_img_wrong' src="img/iswrong.png"/>
                            </div>
                            <div id='verification' style=''>
                            	<input id='ver_register_input' type="text"/>
                            	<img id='ver_register_img' alt="##" src="###"/>
                            </div>
                            <div id='register_prompt'></div>
                          
                            <input id='register_submit' type="button" value="注册  "/>
                        </form>
                        <!--p class="register-tips">*1-10位，不能有空格，支持中文、字母、数字、下划线和小数点</p>
                        <p class="register-tips">*2-16位，仅支持字母和数字</p>
                        <p class="register-tips">*6-15位，不能与帐号相同</p--!>
                    </div>
                </div>
            </section>
        </main>



        <!--footer开始-->
        <footer class="">
            <div class="container center">
                <p>Copyright © 2015 - 2015 OMG All Rights Reserved</p>
            </div>
        </footer>
        <!--footer结束-->
        


        <!--[if lte IE 8]>
            <script src="js/lib/jquery-1.11.2.min.js"></script>
        <![endif]-->
        <!--[if (gt IE 8)|!(IE)]><!-->
            <script src="js/lib/jquery-2.1.3.min.js"></script>
        <!--<![endif]-->
        <script src="js/my/common888.js"></script>
        <script>
 /*       
            $(function(){
            	var temp = String(window.location).split('#');
            	type = temp[1];
            	//alert(type);
            	if (type == 'register') {
            		$(".sign-in-form").hide();
                    $(".register-form").show();
            		
            	} else {
            		$(".register-form").hide();
                    $(".sign-in-form").show();
            	}

            	
                $(".form-header>span:last-of-type").click(function(){
                    if($(this).text() === '注册'){
                        $(".sign-in-form").hide();
                        $(".register-form").show();

                        var temp = String(window.location).split('#');
                        window.location = temp[0] + '#register';
                    }else{
                        $(".register-form").hide();
                        $(".sign-in-form").show();

                        var temp = String(window.location).split('#');
                        window.location = temp[0] + '#login';
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

*/


/*

                 $(".login-username").blur(function() {
                     var tbcStr = $(this).val(); //待确认字符串
                    
                     if (tbcStr.search(/\W/) !== -1) {
                         $(this).next().height('auto').text("*帐号存在不合法字符")
                     } else if (tbcStr.length === 0) {
                         $(this).next().height('auto').text("*帐号不能为空");
                     } else if (tbcStr.length>16 || tbcStr <2) {
                         $(this).next().height('auto').text("*帐号长度小于2位或大于16位");
                     } else {
                         $(this).next().height(0);

                        // 服务器返回数值，数值代表特定的错误
                        $.post(U('home/checkin/isValidUser'), {username:$(this).val()},function(data,status) {
							if (status != 'success') {
                          			//register_submit_prompt.innerHTML = "<br/><font color='red' size='1px'>注册失败！<font>";
                          			$(this).next().height('auto').text("*注册失败！");
                          			alert("连接错误！")
                          			return;
                          	}
                            if (data == 'yes') {
                                	$(this).next().height('auto').text("*账号可用！");
                             } else {
                                	$(this).next().height('auto').text("*账号已存在！");
                             }
                         });
                     }
                 })
                 $(".login-username").blur(function(){
                     var tbcStr = $(this).val();
                     if(tbcStr.length>16 || tbcStr <2){
                         $(this).next().height('auto').text("*帐号长度小于2位或大于16位");
                     }
                 });
                
                 $(".nickname").blur(function(){
                     var tbcStr = $(this).val();
                     if(tbcStr.length ===0 || tbcStr.length >10){
                         $(this).next().height('auto').text("*昵称为空或长度大于10位");
                     }else if(tbcStr.search(/[\s\`\$\!\+\-\*\/\/\\\(\)\[\]\{}=^#@&]/) !== -1){
                         $(this).next().height('auto').text("*昵称含有空白符或非法字符");
                     }
                 });

*/

                /*
                  digits:true              值必须由且仅由数字组成，可以用手机、QQ
                  digitsAndLetter:true     值必须是由数字和字母组成
                  email:true               值必须是一个有效的邮箱地址
                  maxLength:length         值的长度必须小于等于length个字符
                  minLength:length         值的长度必须有length个字符
                  range:[minVal, maxVal]   值必须是数字，大于等于minVal， 并且小于等于maxVal
                  required：true           必须填写，即禁止为空
                  concatStr:string         带连接字符串
                  forbiddenCharacter:true  禁止的字符，针对昵称
                 */
                //validation($(".login-username"),{"maxLength":16,"minLength":2,"required":true,"digitsAndLetter":true,"concatStr":"帐号"});
                //validation($(".login-password"),{"maxLength":15,"minLength":6,"required":true,"concatStr":"密码"})
                //validation($(".nickname"),{"maxLength":10,"minLength":1,"required":true,"forbiddenCharacter":true,"concatStr":"昵称"})

                
     //       })
        </script>
    </body>
</html>