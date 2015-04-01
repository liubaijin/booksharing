<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html id="html" class="no-js" lang="">
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
        <link rel="stylesheet" href="css/my/borrow_and_return.css">
        <script src="js/lib/modernizr-2.8.3.min.js"></script>
        <script src="js/lib/jquery-2.1.3.min.js"></script>
        <script src="js/my/sharelist.js"></script>

    </head>
    <body>
        <!--header开始-->
        <?php include APP_PATH.MODULE_NAME.'/view/header.php' ?> 
        <!--header结束-->
        
        <main id="content-wrap" class="container clearfix">
            <section class="content-header">
                <h3>个人信息</h3>
            </section>
            <section class="content-main">
                <div class="return-book">
                    <div class="book-header">
                        <h3>图书归还进度</h3>
                    </div>
                    <div class="book-content">
                        <ol>
                            <li>
                                <img src="img/book.png" alt="" />
                                <div class="book-detail">
                                    <h4>书名：《餐桌上的明白人》</h4>
                                    <p>借阅时间：2015-2-3 17:38</p>
                                    <p>归还时间：2015-3-3 17:38前</p>
                                    <p>分享者：习大大</p>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 40%">
                                        <span class="progress-rate">12/30</span>
                                      </div>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button>归还图书</button><br>
                                    <button>延长时间</button>
                                </div>
                            </li>
                            <li>
                                <img src="img/book.png" alt="" />
                                <div class="book-detail">
                                    <h4>书名：《餐桌上的明白人》</h4>
                                    <p>借阅时间：2015-2-3 17:38</p>
                                    <p>归还时间：2015-3-3 17:38前</p>
                                    <p>分享者：习大大</p>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 60%">
                                        <span class="progress-rate">36/60</span>
                                      </div>
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button>归还图书</button><br>
                                    <button>延长时间</button>
                                </div>
                            </li>

                        </ol>
                    </div>
                </div>
                <div class="borrow-book">
                    <div class="book-header">
                        <h3>已分享图书</h3>
                    </div>
                    <div class="book-content">
                        <ol>
                            <li>
                                <img src="img/book.png" alt="" />
                                <div class="book-detail">
                                    <h4>书名：《餐桌上的明白人》</h4>
                                    <p>分享时间：2015-2-3 17:38</p>
                                    <p>期限：30天</p>
                                    <p class="recommendation">推荐指数:
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </p>
                                    <p>推荐理由：这本书能让你知道餐桌上一些不为人知的密码哦...</p>
                                </div>
                                <div class="btn-group">
                                    <button>编辑信息</button><br>
                                    <button>取消分享</button>
                                </div>
                            </li>
                            <li>
                                <img src="img/book.png" alt="" />
                                <div class="book-detail">
                                    <h4>书名：《餐桌上的明白人》</h4>
                                    <p>分享时间：2015-2-3 17:38</p>
                                    <p>期限：30天</p>
                                    <p class="recommendation">推荐指数:
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </p>
                                    <p>推荐理由：这本书能让你知道餐桌上一些不为人知的密码哦...</p>
                                </div>
                                <div class="btn-group">
                                    <button>编辑信息</button><br>
                                    <button>取消分享</button>
                                </div>
                            </li>

                        </ol>
                    </div>
                </div>
                <div class="collect-book">
                    <div class="book-header">
                        <h3>已收藏图书</h3>
                    </div>
                    <div class="book-content clearfix">
                        <ol>
                            <li>
                                <div>
                                    <img src="img/collect-book1.png" alt="" />
                                    <div class="collect-book-detail">
                                        <p>状态：未借出</p>
                                        <p>书名：餐桌上的明白人</p>
                                        <p>分享者：刘浩志</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="img/collect-book1.png" alt="" />
                                    <div class="collect-book-detail">
                                        <p>状态：未借出</p>
                                        <p>书名：餐桌上的明白人</p>
                                        <p>分享者：刘浩志</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="img/collect-book1.png" alt="" />
                                    <div class="collect-book-detail">
                                        <p>状态：未借出</p>
                                        <p>书名：餐桌上的明白人</p>
                                        <p>分享者：刘浩志</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="img/collect-book1.png" alt="" />
                                    <div class="collect-book-detail">
                                        <p>状态：未借出</p>
                                        <p>书名：餐桌上的明白人</p>
                                        <p>分享者：刘浩志</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="img/collect-book1.png" alt="" />
                                    <div class="collect-book-detail">
                                        <p>状态：未借出</p>
                                        <p>书名：餐桌上的明白人</p>
                                        <p>分享者：刘浩志</p>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
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

        </script>
        <!--求书单-->

        <!-- <div class="col-xs-12 col-sm-4 col-md-3 book-form-panel">
            <div class="thumbnail">
                <div class="book-form">
                    <p class="center protest" >没有我想要的书，我要<span>填表</span>投诉</p>
                    <hr /> 
                    <div class="">
                        <h3 class="center">求书单</h3>
                        <form action="#">
                            <label for="">
                                ISBN<input type="text" />
                            </label>
                            <label for="">
                                书名<input type="text" />
                            </label>
                            <label for="">
                                作者<input type="text" />
                            </label>
                            <label for="">
                                网页链接<input type="text" />
                            </label>
                            <p>*选填，能知道哪本书即可。</p>
                            <input type="submit" value="提交"/>
                        </form>
                    </div>
                    <hr /> 
                    <p class="tips">(填写求书单，当一旦有人上传这本书，就会第一时间通知你。另外我们也有可能直接买一本送给你哦。梦想一定要有，万一实现了呢！)</p>
                </div>
            </div>
        </div> -->
    </body>
</html>