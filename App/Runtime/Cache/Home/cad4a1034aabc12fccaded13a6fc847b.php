<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <title>非遗商城</title>
    <link rel="stylesheet" href="/test/legacy/Public/shop/css/animate.css">
    <link rel="stylesheet" href="/test/legacy/Public/shop/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/test/legacy/Public/shop/css/meanmenu.min.css">
    <link href="/test/legacy/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/test/legacy/Public/shop/css/font-awesome.css">
    <link rel="stylesheet" href="/test/legacy/Public/shop/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/test/legacy/Public/shop/css/flaticon.css">


    <!-- venobox css -->
    <link rel="stylesheet" href="/test/legacy/Public/shop/venobox/venobox.css" type="text/css" media="screen" />
    <!-- nivo slider css -->
    <link rel="stylesheet" href="/test/legacy/Public/shop/lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="/test/legacy/Public/shop/lib/css/preview.css" type="text/css" media="screen" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="/test/legacy/Public/shop/css/owl.carousel.css">
    <!-- style css -->
    <link rel="stylesheet" href="/test/legacy/Public/shop/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="/test/legacy/Public/shop/css/responsive.css">
    <!-- modernizr css -->
    <script src="/test/legacy/Public/shop/js/vendor/modernizr-2.8.3.min.js"></script>
</head>



<!-- Add your site or application content here -->
<body>
<!-- Mobile Menu End -->
<!--Header Area Start-->
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="header-logo">
                    <a href="<?php echo U('Index/index');?>">
                        <img src="/test/legacy/Public/Home/image/logo/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                <div class="header-right">
                    <ul>

                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 hidden-xs">
                <div class="mainmenu text-center">

                </div>
            </div>
            <div class="col-md-1 hidden-sm">
                <div class="header-right">
                    <ul style="width:150px;">
                        <li>
                            <a href="<?php echo U('Resource/wishlist');?>"><i class="fa fa-heart-o"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo U('User/login');?>"><i class="flaticon-people"></i></a>
                        </li>
                        <li class="shoping-cart">
                            <a href="<?php echo U('Resource/cart');?>">
                                <i class="flaticon-shop"></i>

                            </a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Header Area End-->

<!-- slider Area Start -->
<div class="slider-area">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider" class="slides">
            <img src="/test/legacy/Public/shop/img/slider/<?php echo ($goodsList[6]['goodname']); ?>.jpg" alt="" title="#slider-direction-1"  />
            <img src="/test/legacy/Public/shop/img/slider/<?php echo ($goodsList[3]['goodname']); ?>.jpg" alt="" title="#slider-direction-2"  />
        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="text-center slider-direction">
            <!-- layer 1 -->
            <div class="layer-1">
                <h2 class="title-1"><?php echo ($goodsList[6]['goodname']); ?></h2>
            </div>
            <!-- layer 2 -->
            <div class="layer-2">
                <p class="title-2"><?php echo ($goodsList[6]['introduce']); ?></p>
            </div>
            <!-- layer 3 -->
            <div class="layer-3">
                <a href="#" class="title-3">查看更多</a>
            </div>
            <!-- layer 4 -->
            <div class="layer-4">
                <form action="#" class="title-4">
                    <input type="text" placeholder="请输入想要查找的商品">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction">
            <!-- layer 1 -->
            <div class="layer-1">
                <h2 class="title-1"><?php echo ($goodsList[3]['goodname']); ?></h2>
            </div>
            <!-- layer 2 -->
            <div class="layer-2">
                <p class="title-2"><?php echo ($goodsList[3]['introduce']); ?></p>
            </div>
            <!-- layer 3 -->
            <div class="layer-3">
                <a href="#" class="title-3">查看更多</a>
            </div>
            <!-- layer 4 -->
            <div class="layer-4">
                <form action="#" class="title-4">
                    <input type="text" placeholder="请输入想要查找的商品">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- Online Banner Area Start -->
<div class="online-banner-area">
    <div class="container">
        <div class="banner-title text-center">
            <h2>每周 <span>爆款</span></h2>
            <p>
                重新拾非遗传承，学习传承文化，与传承人一起，去体会非遗之美。
            </p>
        </div>
        <div class="row">
            <div class="banner-list">
                <div class="col-md-4 col-sm-6">
                    <div class="single-banner">
                        <a href="<?php echo U('Resource/single?gid=7');?>">
                            <img src="/test/legacy/Public/shop/img/banner/<?php echo ($goodsList[6]['goodname']); ?>.jpg" alt="">
                        </a>
                        <div class="price" style="color: white;"><span>￥</span><?php echo ($goodsList[6]['price']); ?></div>
                        <div class="banner-bottom text-center">
                            <a href="<?php echo U('Resource/single?gid=7');?>"><?php echo ($goodsList[6]['goodname']); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-banner">
                        <a href="<?php echo U('Resource/single?gid=1');?>">
                            <img src="/test/legacy/Public/shop/img/banner/<?php echo ($goodsList[0]['goodname']); ?>.jpg" alt="">
                        </a>
                        <div class="price" style="color: white;"><span>￥</span><?php echo ($goodsList[0]['price']); ?></div>
                        <div class="banner-bottom text-center">
                            <a href="<?php echo U('Resource/single?gid=1');?>"><?php echo ($goodsList[0]['goodname']); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm">
                    <div class="single-banner">
                        <a href="<?php echo U('Resource/single?gid=10');?>">
                            <img src="/test/legacy/Public/shop/img/banner/<?php echo ($goodsList[9]['goodname']); ?>.jpg" alt="">
                        </a>
                        <div class="price" style="color: white;"><span>￥</span><?php echo ($goodsList[9]['price']); ?></div>
                        <div class="banner-bottom text-center">
                            <a href="#"><?php echo ($goodsList[9]['goodname']); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Online Banner Area End -->

<div class="featured-product-area section-padding">
    <h2 class="section-title">推荐商品</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-menu">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="first-item active">
                            <a href="#arrival" aria-controls="arrival" role="tab" data-toggle="tab" style="color: #ff9350">新上市</a>
                        </li>
                        <li role="presentation">
                            <a href="#sale" aria-controls="sale" role="tab" data-toggle="tab">热销</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-list tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="arrival">
                    <div class="featured-product-list indicator-style">
                        <?php if(is_array($goodsList)): foreach($goodsList as $key=>$gList): ?><div class="single-p-banner">

                                <div class="col-md-3">
                                    <div class="single-banner">
                                        <div class="product-wrapper">
                                            <a href="#" class="single-banner-image-wrapper">
                                                <img alt="" src="/test/legacy/Public/shop/img/featured/<?php echo ($gList['goodname']); ?>.jpg">
                                                <div class="price"><span>￥</span><?php echo ($gList['price']); ?></div>
                                                <div class="rating-icon">
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </a>
                                            <div class="product-description">
                                                <div class="functional-buttons">
                                                    <a href="#" title="Add to Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a href="<?php echo U('Resource/wishlist');?>" title="Add to Wishlist">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                        <i class="fa fa-compress"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom text-center">
                                            <a href="#"><?php echo ($gList['goodname']); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; ?>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Blog Area Start -->
<div class="blog-area section-padding">
    <h2 class="section-title">旅游项目</h2>
    <p>感受非遗地区的人文情怀！</p>
    <div class="container">
        <div class="row">
            <div class="blog-list indicator-style">
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="<?php echo U('Resource/tsingle?id=1');?>">
                            <img src="/test/legacy/Public/shop/img/blog/1.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="<?php echo U('Resource/tsingle?id=1');?>"><h2><?php echo ($travelList[0]['place']); ?></h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="<?php echo U('Resource/tsingle?id=1');?>"><?php echo ($travelList[0]['little']); ?></a></span>
                                <span class="blog-date"><?php echo ($travelList[0]['hticket']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="<?php echo U('Resource/tsingle?id=3');?>">
                            <img src="/test/legacy/Public/shop/img/blog/1.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="<?php echo U('Resource/tsingle?id=3');?>"><h2><?php echo ($travelList[2]['place']); ?></h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="<?php echo U('Resource/tsingle?id=3');?>"><?php echo ($travelList[1]['little']); ?></a></span>
                                <span class="blog-date"><?php echo ($travelList[2]['hticket']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="<?php echo U('Resource/tsingle?id=3');?>">
                            <img src="/test/legacy/Public/shop/img/blog/1.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="<?php echo U('Resource/tsingle?id=3');?>"><h2><?php echo ($travelList[2]['place']); ?></h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="<?php echo U('Resource/tsingle?id=3');?>"><?php echo ($travelList[2]['little']); ?></a></span>
                                <span class="blog-date"><?php echo ($travelList[2]['hticket']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="<?php echo U('Resource/tsingle?id=4');?>">
                            <img src="/test/legacy/Public/shop/img/blog/1.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="<?php echo U('Resource/tsingle?id=4');?>"><h2><?php echo ($travelList[3]['place']); ?></h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="<?php echo U('Resource/tsingle?id=4');?>"><?php echo ($travelList[3]['little']); ?></a></span>
                                <span class="blog-date"><?php echo ($travelList[3]['hticket']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="<?php echo U('Resource/tsingle?id=5');?>">
                            <img src="/test/legacy/Public/shop/img/blog/1.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="<?php echo U('Resource/tsingle?id=5');?>"><h2><?php echo ($travelList[4]['place']); ?></h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="<?php echo U('Resource/tsingle?id=5');?>"><?php echo ($travelList[4]['little']); ?></a></span>
                                <span class="blog-date"><?php echo ($travelList[4]['hticket']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="<?php echo U('Resource/tsingle?id=1');?>">
                            <img src="/test/legacy/Public/shop/img/blog/1.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="<?php echo U('Resource/tsingle?id=1');?>"><h2><?php echo ($travelList[0]['place']); ?></h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="<?php echo U('Resource/tsingle?id=1');?>"><?php echo ($travelList[0]['little']); ?></a></span>
                                <span class="blog-date"><?php echo ($travelList[0]['hticket']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
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

<!-- jquery latest version -->
<script src="https://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<!-- bootstrap js -->
<script src="/test/legacy/Public/shop/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="/test/legacy/Public/shop/js/owl.carousel.min.js"></script>
<!-- jquery-ui js -->
<script src="/test/legacy/Public/shop/js/jquery-ui.min.js"></script>
<!-- jquery Counterup js -->
<script src="/test/legacy/Public/shop/js/jquery.counterup.min.js"></script>
<script src="/test/legacy/Public/shop/js/waypoints.min.js"></script>
<!-- jquery countdown js -->
<script src="/test/legacy/Public/shop/js/jquery.countdown.min.js"></script>
<!-- jquery countdown js -->
<script type="text/javascript" src="/test/legacy/Public/shop/venobox/venobox.min.js"></script>
<!-- jquery Meanmenu js -->
<script src="/test/legacy/Public/shop/js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="/test/legacy/Public/shop/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!-- scrollUp JS -->
<script src="/test/legacy/Public/shop/js/jquery.scrollUp.min.js"></script>
<!-- plugins js -->
<script src="/test/legacy/Public/shop/js/plugins.js"></script>
<!-- Nivo slider js -->
<script src="/test/legacy/Public/shop/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="/test/legacy/Public/shop/lib/home.js" type="text/javascript"></script>
<!-- main js -->
<script src="/test/legacy/Public/shop/js/main.js"></script>
</body>