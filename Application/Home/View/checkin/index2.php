<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>享·书 -- 类目分类</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/lib/normalize.css">
        <link rel="stylesheet" href="css/my/init.css">
        <link rel="stylesheet" href="css/my/common.css">
        <link rel="stylesheet" href="css/my/checkin.css">
        <script src="js/lib/modernizr-2.8.3.min.js"></script>
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
                            <input type="text" placeholder="享·书帐号"/>
                            <input type="password" placeholder="密码"/>
                            <input type="submit" value="登录"/>
                        </form>
                    </div>
                    <div class="register-form">
                        <p class="form-header clearfix">
                            <span>注册 享·书</span>
                            <span>登录</span>
                        </p>
                        <form action="">
                            <input type="text" placeholder="昵称"/>
                            <input type="text" placeholder="享·书帐号"/>
                            <input type="password" placeholder="密码"/>
                            <input type="submit" value="注册"/>
                        </form>
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
        
        <script>
            $(function(){
                $(".form-header>span:last-of-type").click(function(){
                    if($(this).text() === '注册'){
                        $(".sign-in-form").hide();
                        $(".register-form").show();
                    }else{
                        $(".register-form").hide();
                        $(".sign-in-form").show();
                    }
                });


                
            })
        </script>
    </body>
</html>
