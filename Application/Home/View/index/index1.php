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
        <link rel="stylesheet" href="css/my/fenlei.css">
        <script src="js/lib/modernizr-2.8.3.min.js"></script>
    </head>
    <body>

        <!--header开始-->
        <?php include APP_PATH.MODULE_NAME.'/view/header.php' ?> 
        <!--header结束-->
        <?php //dump($main_type); ?>
        <main id="content-wrap" class="container clearfix">
            <section class="content-header center">
                <h3 class="center">请选择你的分类，或直接<span>搜索</span></h3> <!--点击这里 触发总搜索按钮-->
                <p class="number center">总共有<span>16</span>个分类，<span>138</span>本书</p>
            </section>
            <section class="content-main">
                <div class="row-fluid">
                <?php
                	foreach ($main_type as $key => $val) {
	                    echo
	                    '<div class="col-xs-12 col-sm-4 col-md-3">
	                        <div class="thumbnail">
	                            <a href="'.U('home/classification/index').'"><img src="'.'img/angularjs.jpg'.'" alt="" /></a>
	                            <div class="caption">
	                                <a href=".#." class="center">'.$val['name_type'].'</span></a>
	                            </div>
	                        </div>
	                    </div>';
                    }
                   ?>
                </div>
            </section>
        </main>




        <!--footer开始-->
        <?php include APP_PATH.MODULE_NAME.'/view/footer.php' ?>
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
