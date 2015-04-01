<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
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
        <link rel="stylesheet" href="css/my/fenlei.css">
        <script src="js/lib/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--header开始-->
        <header>
            <div class="header-wrap container">
                <img class="logo" src="img/logo.png" alt="网站LOGO" />
                <div class="user-panel">
                    <div class="user-head-icon">
                        <img src="img/head.jpg" alt="用户头像" />
                        <span class="message-number">3</span>
                    </div>
                    <div class="user-info">
                        <p class="user-name">刘健超</p>
                        <p class="user-level">分享达人</p>
                    </div>
                    <div class="icon-set">
                        <a class="sign-out" href="#" title="注销您的帐号">注销</a>
                        <a class="user-set" href="#" title="跳转到用户设置页面">设置</a>
                    </div>
                    <div class="message-list">
                        <ul>
                            <li class="clearfix"><a href="#">刘柏业想借你的《红楼梦》</a><span>1天前</span></li>
                            <li class="clearfix"><a href="#">小呵想借你的《Javascript高级程序设计》</a><span>1天前</span></li>
                            <li class="clearfix"><a href="#">刘柏业想借你的《红楼梦》</a><span>1天前</span></li>
                        </ul>
                        <div class="pagination">
                            <a href="#">&laquo;上一页</a>
                            <a href="#">下一页&raquo;</a>
                        </div>
                    </div>
                </div>

                <div class="header-center-wrap">
                    <nav>
                        <a href="#" class="active">图书分类</a>
                        <a href="#">分享图书</a>
                        <a href="#">订阅图书</a>
                        <a href="#">我的情况</a>
                        <div class="search">
                            <form action="#">
                                <input type="text" placeholder="快速搜索..." />
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--header结束-->
        
        <main id="content-wrap" class="container clearfix">
            <section class="content-header center">
                <h3 class="center">请选择你的分类，或直接<span>搜索</span></h3> <!--点击这里 触发总搜索按钮-->
                <p class="number center">总共有<span>16</span>个分类，<span>138</span>本书</p>
            </section>
            <section class="content-main">
                <div class="row-fluid">
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="img/angularjs.jpg" alt="" /></a>
                            <div class="caption">
                                <a href="#" class="center">Angular<span> (4本)</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="img/angularjs-succinctly.jpg" alt="" /></a>
                            <div class="caption">
                                <a href="#" class="center">Angular<span> (4本)</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="img/ios.jpg" alt="" /></a>
                            <div class="caption">
                                <a href="#" class="center">Angular<span> (4本)</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="img/django.jpg" alt="" /></a>
                            <div class="caption">
                                <a href="#" class="center">Angular<span> (4本)</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="img/elixir.jpg" alt="" /></a>
                            <div class="caption">
                                <a href="#" class="center">Angular<span> (4本)</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="img/firefoxos.jpg" alt="" /></a>
                            <div class="caption">
                                <a href="#" class="center">Angular<span> (4本)</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="img/git.jpg" alt="" /></a>
                            <div class="caption">
                                <a href="#" class="center">Angular<span> (4本)</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="img/go.jpg" alt="" /></a>
                            <div class="caption">
                                <a href="#" class="center">Angular<span> (4本)</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>




        <!--footer开始-->
        <footer class="">
            <div class="container center">
                <div class="links">
                    友情链接：<a href="#">东莞理工学院</a><a href="#">共鸣网</a><a href="#">NANA</a>
                </div>
                <div class="cooperation-and-suggestions">
                    <a href="#">合作联系</a><a href="#">广告相关</a><a href="#">发展建议</a>
                </div>
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
            // alert($.fn.jquery); // 显示加载的jQuery的版本
        </script>
    </body>
</html>