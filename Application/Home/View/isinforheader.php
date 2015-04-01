 					<div class="user-head-icon">
                        <img src="img/head.jpg" alt="用户头像" />
                        <span class="message-number">3</span>
                    </div>
                    <div class="user-info">
                        <p class="user-name"><?php echo I('session.username'); ?></p>
                        <p class="user-level">分享达人</p>
                    </div>
                    <div class="icon-set">
                        <a class="sign-out" href="<?php echo U('home/checkin/logout');?>" title="安全退出" onclick="checkout()">注销</a>
                        <a class="user-set" href="#" title="设置">设置</a>
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