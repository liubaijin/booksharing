        <header>
            <div class="header-wrap container">
                <a href="<?php echo __ROOT__; //U('home/index/index'); ?>"><img class="logo" src="img/logo.png" alt="网站LOGO" /></a>
               
                <div class="user-panel">
                <?php
                    //session('user', 'uname');
                    if (I('session.username')) {
						include APP_PATH.MODULE_NAME.'/view/isinforheader.php';
					} else {
						echo "<div class='user_not_login'>您好，请&nbsp;&nbsp;<a href='".U('home/checkin/index#login')."'>登录</a> &nbsp;<a href='".U('home/checkin/index#register')."'>注册</a></div>";
					}
                ?>
                   
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