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
<title>追遗首页</title>
<br>
<div class="container" id="container1">
    <div class="row" id="center1">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8" id="lunbo">
            <div id="lunbo-img">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <!-- 轮播（Carousel）指标 -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- 轮播（Carousel）项目 -->
                    <div class="carousel-inner" style="text-align: center">
                        <div class="item active">
                            <img alt="First slide" src="/test/legacy/Public/Home/image/mianju.jpg"/>
                            <div class="carousel-caption">
                                <span>习近平总书记</span>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Second slide" src="/test/legacy/Public/Home/image/huasan.jpg" />
                            <div class="carousel-caption">
                                <span>隔山打虎</span>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Third slide" src="/test/legacy/Public/Home/image/piying.jpg" />
                            <div class="carousel-caption">
                                <span>浙江温州</span>
                            </div>
                        </div>
                    </div>
                    <!-- 轮播（Carousel）导航 -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" id="gonggao">
            <div class="title-style">公告发布</div>
            <?php if(is_array($list)): foreach($list as $key=>$g): ?><a href="">
                    <form action="<?php echo U('Information/noticontent');?>" method="post">
                        <input type="hidden" name="noticeId" value="<?php echo ($noti["id"]); ?>">
                        <input type="hidden" name="contentType" value="notice">
                        <button type="submit" class="info-title">
                            <?php echo (msubstr($g["title"],0,12,'utf-8')); ?><b><?php echo ($g["time"]); ?></b>
                        </button>
                    </form>
                    <!--<div class="info-title"><?php echo (msubstr($g["title"],0,12,'utf-8')); ?><b><?php echo ($g["time"]); ?></b></div>-->
                </a><?php endforeach; endif; ?>
            <div class="under-box">
                <div class="page-list pages" id="page">
                    <?php echo ($page); ?>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="row" id="center2">
        <div class="col-xs-12 col-sm-12 col-md-12  col-lg-8" id="center2-1">
            <div class="center-insidebox">
                <div class="inside" id="minglu">
                    <div class="title-style">非遗名录</div>
                    <div id="minglu-main">
                        <div id = "minglu-main1" class="minglu">
                            <div class="minglu-pic">
                                <img width="90%" height="90%" src="/test/legacy/Public/Home/image/icon/shuji.png">
                            </div>
                            <div class="minglu-intro">
                                <div class="minglu-list">
                                    <b>传统戏剧类</b>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($ctxj[0]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($ctxj[1]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($ctxj[2]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($ctxj[3]); ?>
                                </div>
                            </div>
                            <div class="minglu-pic">
                                <img width="90%" height="90%" src="/test/legacy/Public/Home/image/icon/erhu.png">
                            </div>
                            <div class="minglu-intro">
                                <div class="minglu-list">
                                    <b>民间音乐类</b>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($mjyy[0]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($mjyy[1]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($mjyy[2]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($mjyy[3]); ?>
                                </div>
                            </div>
                        </div>
                        <div id = "minglu-main2" class="minglu">
                            <div class="minglu-pic">
                                <img width="90%" height="90%" src="/test/legacy/Public/Home/image/icon/wudao.png">
                            </div>
                            <div class="minglu-intro">
                                <div class="minglu-list">
                                    <b>民俗舞蹈类</b>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($mjwd[0]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($mjwd[1]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($mjwd[2]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($mjwd[3]); ?>
                                </div>
                            </div>
                            <div class="minglu-pic">
                                <img width="90%" height="90%" src="/test/legacy/Public/Home/image/icon/shanzi.png">
                            </div>
                            <div class="minglu-intro">
                                <div class="minglu-list">
                                    <b>传统工艺类</b>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($ctgy[0]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($ctgy[1]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($ctgy[2]); ?>
                                </div>
                                <div class="minglu-list">
                                    <?php echo ($ctgy[3]); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12  col-lg-4" id="center2-2">
            <div class="center-insidebox" id="dynamic">
                <div class="title-style">最新动态</div>
                <div class="table-box">
                    <?php if(is_array($dynamic)): foreach($dynamic as $key=>$dynamic): ?><form action="<?php echo U('Information/dynacontent');?>" method="post">
                            <input type="hidden" name="dynaId" value="<?php echo ($dynamic["id"]); ?>">
                            <button type="submit" class="info-title">
                                <?php echo (msubstr($dynamic["title"],0,10,'utf-8')); ?><b><?php echo ($dynamic["time"]); ?></b>
                            </button>
                        </form>
                        <!--<div class="info-title"><?php echo (msubstr($dynamic["title"],0,10,'utf-8')); ?><b><?php echo ($dynamic["time"]); ?></b></div>--><?php endforeach; endif; ?>
                    <div class="under">
                        <a href="<?php echo U('Dynamic/index');?>"><h4>查看更多</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row" id="center3">
        <div class="col-xs-12 col-sm-12 col-md-12  col-lg-8" id="center3-1">
            <div class="title-style">非遗传承人</div>
            <div id="inheritor">
                <div id="inheritor-content">
                    <div id="index-content-title"><b>传承人：<?php echo ($inher["name"]); ?></b></div>
                    <div id="index-content">
                        <p><?php echo ($inher["introduce"]); ?></p>
                    </div>
                </div>
                <div id="inheritor-pic">
                    <div id="pic" style='background-image: url("/test/legacy/Public/Home/image/inheritor/<?php echo ($inher["id"]); ?>.png");'>
                        <div id="pic-intro">
                            <div class="pic-info"><b>姓名：</b><?php echo ($inher["name"]); ?></div>
                            <div class="pic-info"><b>性别：</b><?php echo ($inher["sex"]); ?></div>
                            <div class="pic-info"><b>外号：</b><?php echo ($inher["qname"]); ?></div>
                            <div class="pic-info"><b>地区：</b><?php echo ($inher["birthPlace"]); ?></div>
                        </div>
                    </div>
                    <a href=""><div id="more">点击查看更多传承人</div></a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12  col-lg-4" id="center3-2">
            <div class="title-style">每周推荐</div>
            <script type="text/javascript">
                $(function () {
                    var $this = $("#index-shop");
                    var scrollTimer;
                    $this.hover(function () {
                        clearInterval(scrollTimer);
                    },function () {
                        scrollTimer = setInterval(function () {
                            scrollNews($this);
                        },2500);
                    }).trigger("mouseleave");

                    function scrollNews(obj) {
                        var $self = obj.find("ul");
                        var lineHeight = $self.find("li:first").height();
                        $self.animate({
                            "marginTop":-lineHeight+"px"
                        },600,function () {
                            $self.css({
                                marginTop:0
                            }).find("li:first").appendTo($self);
                        })
                    }
                })
            </script>
            <div id="index-shop">
                <ul>
                    <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow">
                        <div class="shop-list">
                            <div class="shop-list-pic"><img width="100%" height="100%" src="/test/legacy/Public/Home/image/shop/products/banya1.jpg"/></div>
                            <div class="shop-list-intro"><i>每周上新！点击查看！</i></div>
                        </div>
                    </a> </li>
                    <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow">
                        <div class="shop-list">
                            <div class="shop-list-pic"><img width="100%" height="100%" src="/test/legacy/Public/Home/image/shop/products/banya1.jpg"/></div>
                            <div class="shop-list-intro">每周上新！点击查看！</div>
                        </div>
                    </a> </li>
                    <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow">
                        <div class="shop-list">
                            <div class="shop-list-pic"><img width="100%" height="100%" src="/test/legacy/Public/Home/image/shop/products/banya1.jpg"/></div>
                            <div class="shop-list-intro"><i>每周上新！点击查看！</i></div>
                        </div>
                    </a> </li>
                    <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow">
                        <div class="shop-list">
                            <div class="shop-list-pic"><img width="100%" height="100%" src="/test/legacy/Public/Home/image/shop/products/banya1.jpg"/></div>
                            <div class="shop-list-intro">每周上新！点击查看！</div>
                        </div>
                    </a> </li>
                    <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow">
                        <div class="shop-list">
                            <div class="shop-list-pic"><img width="100%" height="100%" src="/test/legacy/Public/Home/image/shop/products/banya1.jpg"/></div>
                            <div class="shop-list-intro"><i>每周上新！点击查看！</i></div>
                        </div>
                    </a> </li>
                    <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow">
                        <div class="shop-list">
                            <div class="shop-list-pic"><img width="100%" height="100%" src="/test/legacy/Public/Home/image/shop/products/banya1.jpg"/></div>
                            <div class="shop-list-intro">每周上新！点击查看！</div>
                        </div>
                    </a> </li>
                    <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow">
                        <div class="shop-list">
                            <div class="shop-list-pic"><img width="100%" height="100%" src="/test/legacy/Public/Home/image/shop/products/banya1.jpg"/></div>
                            <div class="shop-list-intro"><i>每周上新！点击查看！</i></div>
                        </div>
                    </a> </li>
                </ul>
            </div>
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