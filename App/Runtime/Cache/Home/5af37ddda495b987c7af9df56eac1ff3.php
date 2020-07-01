<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <title>我的收藏</title>
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
<!-- Shop Area Start -->
<div class="shopping-area section-padding">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="wishlist-right-area table-responsive">
                    <table class="wish-list-table">
                        <thead>
                        <tr>
                            <th class="t-product-name">商品</th>
                            <th class="product-details-comment">商品介绍/概要</th>
                            <th class="product-price-cart">加入购物车</th>
                            <th class="w-product-remove">删除</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="product-image">
                                <a href="#">
                                    <img src="/test/legacy/Public/shop/img/single-little/<?php echo ($goodsList[6]['goodname']); ?>.jpg" alt="">
                                </a>
                            </td>
                            <td class="product-details">
                                <h4><?php echo ($goodsList[6]['goodname']); ?></h4>
                                <p><?php echo ($goodsList[6]['introduce']); ?>
                                </p>
                                <textarea placeholder="请输入您的评论"></textarea>
                            </td>
                            <td class="product-cart">
                                <div class="product-cart-details">
                                    <span>￥<?php echo ($goodsList[6]['price']); ?></span>
                                    <input type="number" value="1">
                                    <input type="submit" value="加入购物车">
                                </div>
                                <p>
                                    <a href="#">编辑</a>
                                </p>
                            </td>
                            <td class="product-remove">
                                <a href="#">
                                    <i class="flaticon-delete"></i>
                                </a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="wishlist-bottom-link">
                    <a class="wishlist-single-link" href="<?php echo U('Resource/shop');?>">
                        <i class="fa fa-angle-double-left"></i>
                        返回商城首页
                    </a>
                    <div class="shopingcart-bottom-area wishlist-bottom-area pull-right">
                        <a href="#" class="right-shoping-cart">分享心愿单</a>
                        <a href="#" class="right-shoping-cart">全部加入购物车</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Area End -->
<!-- Single Product Area End -->
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