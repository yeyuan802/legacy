<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <link href="/test/legacy/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/test/legacy/Public/Home/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="/test/legacy/Public/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="/test/legacy/Public/bootstrap/js/jquery.js"></script>
    <script src="/test/legacy/Public/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">

        function checkStr(){
            var Search = document.getElementById('search').value;
            var len = Search.length;
            if(len>40){
                alert("搜索内容不能多于20字！");
            }
        }
        function check() {
            var Search = document.getElementById('search').value;
            var len = Search.length;
            if(len>40){
                alert("您当前输入超过了20个字！");
                return false;
            }else{
                return true;
            }
        }
        function cityDisplay(){
            var city = document.getElementById("country");
            if(city.style.display === "none"){
                city.style.display = "block";
            }else{
                city.style.display = "none";
            }
        }
    </script>
</head>
<body>
<div id="headbox">
    <a href="<?php echo U('Index/index');?>"><img id="logo" src="/test/legacy/Public/Home/image/logo/logo.png"></a>
    <div id="userinfo">
        <?php if(isset($_SESSION['userName'])): ?><h4><img width="25px" height="25px" style="margin-right: 10px;" src="/test/legacy/Public/Home/image/icon/user2.png">当前用户：<?php echo (session('userName')); ?>   <a href="<?php echo U('User/logout');?>">注销</a></h4>
            <h5><img width="25px" height="25px" style="margin-right: 10px;" src="/test/legacy/Public/Home/image/icon/clock2.png"><?php echo (date('Y-m-d g:i a',time())); ?></h5>
            <?php else: ?>
            <h4><a href="<?php echo U('User/login');?>"><img width="25px" height="25px" style="margin-right: 10px;" src="/test/legacy/Public/Home/image/icon/user1.png">点击登录</a> </h4>
            <h5><img width="25px" height="25px" style="margin-right: 10px;" src="/test/legacy/Public/Home/image/icon/clock1.png"><?php echo (date('Y-m-d g:i a',time())); ?></h5><?php endif; ?>
    </div>
</div>
<div class="header">
    <div class="container">
        <div class="top-nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">展开导航栏</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul id="navbar" class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo U('Index/index');?>"><img width="25px" height="25px" style="margin-top: -6px;" src="/test/legacy/Public/Home/image/icon/index.png">首页</a></li>
                        <li><a href="<?php echo U('Policy/index');?>"><img width="25px" height="25px" src="/test/legacy/Public/Home/image/icon/policy.png">政策</a></li>
                        <li><a href="<?php echo U('Resource/shop');?>"><img width="25px" height="25px" src="/test/legacy/Public/Home/image/icon/resource.png">商品</a>

                        </li>
                        <li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img width="25px" height="25px" src="/test/legacy/Public/Home/image/icon/info.png">资讯<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="" href="<?php echo U('Information/notice');?>">公告</a></li>
                                <li><a class="" href="<?php echo U('Information/dynamic');?>">动态</a></li>
                            </ul>
                        </li>
                        <li><a href=""><img width="25px" height="25px" style="margin-top: -8px;" src="/test/legacy/Public/Home/image/icon/school.png">非遗视频</a></li>
                        <li><a href="<?php echo U('Message/index');?>"><img width="25px" height="25px" src="/test/legacy/Public/Home/image/icon/message.png">留言板</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>
        <form class="navbar-form navbar-right" method="post" action="<?php echo U('Resource/search');?>" role="search">
            <div class="form-group">
                <input type="text" name="search" id="search" onkeyup="checkStr()" class="form-control" placeholder="请输入想要查询的名录" required>
            </div>
            <button type="submit" onclick="check()" class="btn btn-default">搜索</button>
            <div id="city-button" onclick="cityDisplay()" class="btn btn-default">区县</div>
        </form>
        <div class="clearfix"> </div>
    </div>
</div>
<div id="country">
    <?php if(is_array($country)): foreach($country as $key=>$country): ?><form action="<?php echo U('/Resource/countryList');?>" method="post">
            <input type="hidden" name="country-name" value="<?php echo ($country["name"]); ?>">
            <button type="submit" class="country-name">
                <?php echo ($country["name"]); ?>
            </button>
        </form><?php endforeach; endif; ?>
</div>
<div class="container" style="background-color: white;padding:20px;box-sizing: border-box;margin-top:30px">
    <div class="row list-box">
        <?php if($searchResult != null): ?><div class="col-xs-12 col-sm-5 col-md-5  col-lg-4 list-pic">
                <img class="intro-pic" src="/test/legacy/Public/Home/image/minglu/<?php echo ($searchResult[0]["name"]); ?>.jpg">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 list-intro">
                <div class="intro-box">
                    <h3 class="page-header"><?php echo ($searchResult[0]["name"]); ?> | 简介</h3>
                    <p>&emsp;<?php echo (msubstr($searchResult[0]["introduce"],0,400,'utf-8')); ?></p>
                </div>
            </div>
            <?php else: ?>
            <p style="display: block;width:100%;margin-top:30px;margin-bottom: 30px;text-align: center">您搜索的名录不存在！</p><?php endif; ?>
    </div>
</div>
<div class="footer">
    <div class="container" id="foot-box">
        <a href="#">免责声明</a>|
        <a href="#">商家入驻</a>|
        <a href="#">掌上非遗</a>|
        <a href="#">非遗社区</a>|
        <a href="#">非遗公益</a>
    </div>
    <div>
        <b>Copyright © 2020 All Rights Reserved 重庆师范大学计算机与信息科学学院非遗工作小组 版权所有,违者必究</b>
    </div>
</div>
</body>
</html>