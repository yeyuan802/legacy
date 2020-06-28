<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="UTF-8">
    <link href="/legacy/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/legacy/Public/Home/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="/legacy/Public/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="/legacy/Public/bootstrap/js/jquery.js"></script>
    <script src="/legacy/Public/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">

        function checkStr(){
            var Search = document.getElementById('search').value;
            var len = Search.length;
            if(len>20){
                alert("搜索内容不能多于20字符！");
            }
        }
        function check() {
            var Search = document.getElementById('search').value;
            var len = Search.length;
            if(len>20){
                alert("您当前输入超过了20个字符！");
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
    <a href="<?php echo U('Index/index');?>"><img id="logo" src="/legacy/Public/Home/image/logo/logo.png"></a>
    <div id="userinfo">
        <?php if(isset($_SESSION['userName'])): ?><h4><img width="25px" height="25px" style="margin-right: 10px;" src="/legacy/Public/Home/image/icon/user2.png">当前用户：<?php echo (session('userName')); ?>   <a href="<?php echo U('User/logout');?>">注销</a></h4>
            <h5><img width="25px" height="25px" style="margin-right: 10px;" src="/legacy/Public/Home/image/icon/clock2.png"><?php echo (date('Y-m-d g:i a',time())); ?></h5>
            <?php else: ?>
            <h4><a href="<?php echo U('User/login');?>"><img width="25px" height="25px" style="margin-right: 10px;" src="/legacy/Public/Home/image/icon/user1.png">点击登录</a> </h4>
            <h5><img width="25px" height="25px" style="margin-right: 10px;" src="/legacy/Public/Home/image/icon/clock1.png"><?php echo (date('Y-m-d g:i a',time())); ?></h5><?php endif; ?>
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
                        <li><a href="<?php echo U('Index/index');?>"><img width="25px" height="25px" style="margin-top: -6px;" src="/legacy/Public/Home/image/icon/index.png">首页</a></li>
                        <li><a href="<?php echo U('Policy/index');?>"><img width="25px" height="25px" src="/legacy/Public/Home/image/icon/policy.png">政策</a></li>
                        <li><a href="<?php echo U('Resource/shop');?>"><img width="25px" height="25px" src="/legacy/Public/Home/image/icon/resource.png">商品</a>

                        </li>
                        <li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img width="25px" height="25px" src="/legacy/Public/Home/image/icon/info.png">资讯<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="" href="<?php echo U('Information/notice');?>">公告</a></li>
                                <li><a class="" href="<?php echo U('Information/dynamic');?>">动态</a></li>
                            </ul>
                        </li>
                        <li><a href=""><img width="25px" height="25px" style="margin-top: -8px;" src="/legacy/Public/Home/image/icon/school.png">高校合作</a></li>
                        <li><a href="<?php echo U('Message/index');?>"><img width="25px" height="25px" src="/legacy/Public/Home/image/icon/message.png">留言板</a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>
        <form class="navbar-form navbar-right" method="post" action="<?php echo U('Resource/search');?>" role="search">
            <div class="form-group">
                <input type="text" name="search" id="search" onkeyup="checkStr()" class="form-control" placeholder="请输入非遗名录名称" required>
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
<link href="/legacy/Public/Home/css/policy&info.css" rel="stylesheet">
<div id="policy-main" class="container">
    <div id="policy-title"><h2 id="pl">政策</h2></div>
    <br>
    <div id="choose">
        <div class="choose" id="choose1">
            <h3><a href="<?php echo U('Policy/index?id=1');?>">国内法规文件</a></h3>
        </div>
        <div class="choose" id="choose2">
            <h3><a href="<?php echo U('Policy/index?id=2');?>">联合国教科文组织文件</a></h3>
        </div>
        <div class="choose" id="choose3">
            <h3><a href="<?php echo U('Policy/index?id=3');?>">重要讲话</a></h3>
        </div>
    </div>
    <br>
    <hr>
    <table id="policy-table" class="table table-striped">
        <thead>
        <tr>
            <th width="70%"><h3>文件名称</h3></th>
            <th><h3>发布时间</h3></th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($policy)): foreach($policy as $key=>$py): ?><tr>
                    <td>
                        <form action="<?php echo U('Policy/content');?>" method="post">
                            <input type="hidden" name="policyId" value="<?php echo ($py["id"]); ?>">
                            <button type="submit" class="policy-title">
                                <?php echo ($py["title"]); ?>
                            </button>
                        </form>
                    </td>
                    <td><?php echo ($py["time"]); ?></td>
                </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    <div id="policy-page">
        <div class="page-list pages" id="page">
            <?php echo ($page); ?>
        </div>
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