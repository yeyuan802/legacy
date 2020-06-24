<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <title>非遗商城</title>
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/css/animate.css">
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/css/meanmenu.min.css">
    <link href="/EPP_Project/legacy/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/css/font-awesome.css">
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/css/flaticon.css">


    <!-- venobox css -->
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/venobox/venobox.css" type="text/css" media="screen" />
    <!-- nivo slider css -->
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/lib/css/preview.css" type="text/css" media="screen" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/css/owl.carousel.css">
    <!-- style css -->
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="/EPP_Project/legacy/Public/shop/css/responsive.css">
    <!-- modernizr css -->
    <script src="/EPP_Project/legacy/Public/shop/js/vendor/modernizr-2.8.3.min.js"></script>
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
                    <a href="index.html">
                        <img src="/EPP_Project/legacy/Public/Home/image/logo/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                <div class="header-right">
                    <ul>
                        <li class="shoping-cart">
                            <a href="#">
                                <i class="flaticon-shop"></i>
                                <span>2</span>
                            </a>
                            <div class="add-to-cart-product">
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="/EPP_Project/legacy/Public/shop/img/featured/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">合川峡砚</a>
                                        </p>
                                        <a href="single-product.html">12寸</a>
                                        <span class="cart-price">￥300.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="/EPP_Project/legacy/Public/shop/img/featured/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">合川峡砚</a>
                                        </p>
                                        <a href="single-product.html">12寸</a>
                                        <span class="cart-price">￥300.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="total-cart-price">
                                    <div class="cart-product-line fast-line">
                                        <span>优惠</span>
                                        <span class="free-shiping">￥10.50</span>
                                    </div>
                                    <div class="cart-product-line">
                                        <span>共计</span>
                                        <span class="total">￥600.00</span>
                                    </div>
                                </div>
                                <div class="cart-checkout">
                                    <a href="checkout.html">
                                        查看购物车
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 hidden-xs">
                <div class="mainmenu text-center">

                </div>
            </div>
            <div class="col-md-1 hidden-sm">
                <div class="header-right">
                    <ul style="display: flex;display: -webkit-flex">
                        <li style="width: 60px;position: absolute;top:10px;right: -100%" >
                            <div id="userinfo">
                                <?php if(isset($_SESSION['userName'])): ?><h4><img width="25px" height="25px" style="margin-right: 10px;" src="/EPP_Project/legacy/Public/Home/image/icon/user2.png">当前用户：<?php echo (session('userName')); ?>   <a href="<?php echo U('User/logout');?>">注销</a></h4>
                                    <?php else: ?>
                                    <h4><a href="<?php echo U('User/login');?>"><img width="25px" height="25px" src="/EPP_Project/legacy/Public/Home/image/icon/user1.png">点击登录</a> </h4><?php endif; ?>
                            </div>
                        </li>
                        <li class="shoping-cart">
                            <a href="#">
                                <i class="flaticon-shop"></i>
                                <span>2</span>
                            </a>
                            <div class="add-to-cart-product">
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="img/shop/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">East of eden</a>
                                        </p>
                                        <a href="single-product.html">S, Orange</a>
                                        <span class="cart-price">$ 140.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="img/shop/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">East of eden</a>
                                        </p>
                                        <a href="single-product.html">S, Orange</a>
                                        <span class="cart-price">$ 140.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="total-cart-price">
                                    <div class="cart-product-line fast-line">
                                        <span>Shipping</span>
                                        <span class="free-shiping">$10.50</span>
                                    </div>
                                    <div class="cart-product-line">
                                        <span>Total</span>
                                        <span class="total">$ 140.00</span>
                                    </div>
                                </div>
                                <div class="cart-checkout">
                                    <a href="checkout.html">
                                        Check out
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
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
            <img src="/EPP_Project/legacy/Public/shop/img/slider/1.jpg" alt="" title="#slider-direction-1"  />
            <img src="/EPP_Project/legacy/Public/shop/img/slider/2.jpg" alt="" title="#slider-direction-2"  />
        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="text-center slider-direction">
            <!-- layer 1 -->
            <div class="layer-1">
                <h2 class="title-1">梁平竹帘</h2>
            </div>
            <!-- layer 2 -->
            <div class="layer-2">
                <p class="title-2">梁平竹帘，又称梁山竹帘，中国民间手工艺品，竹帘画的一种。是流传千年的历史文化遗产，已被录入中国国家级非物质文化遗产名录。</p>
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
                <h2 class="title-1">合川桃片</h2>
            </div>
            <!-- layer 2 -->
            <div class="layer-2">
                <p class="title-2">合川桃片，重庆市合川区特产，中国国家地理标志产品。合川桃片是是重庆合川区传统名点之一，
                    始创于1840年。用上等糯米、核桃仁、川白糖、蜜玫瑰等原料，精制加工而成。</p>
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
                        <a href="#">
                            <img src="/EPP_Project/legacy/Public/shop/img/banner/1.jpg" alt="">
                        </a>
                        <div class="price" style="color: white;"><span>￥</span>250</div>
                        <div class="banner-bottom text-center">
                            <a href="#">梁平竹帘</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-banner">
                        <a href="#">
                            <img src="/EPP_Project/legacy/Public/shop/img/banner/2.jpg" alt="">
                        </a>
                        <div class="price" style="color: white;"><span>￥</span>20</div>
                        <div class="banner-bottom text-center">
                            <a href="#">重庆小面</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm">
                    <div class="single-banner">
                        <a href="#">
                            <img src="/EPP_Project/legacy/Public/shop/img/banner/3.jpg" alt="">
                        </a>
                        <div class="price" style="color: white;"><span>￥</span>15</div>
                        <div class="banner-bottom text-center">
                            <a href="#">龙须酥</a>
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
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/1.jpg">
                                            <div class="price"><span>￥</span>600</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">合川峡砚</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/5.jpg">
                                            <div class="price"><span>￥</span>60</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">荣昌折扇</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/2.jpg">
                                            <div class="price"><span>￥</span>240</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">朗溪竹板桥造纸</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/6.jpg">
                                            <div class="price"><span>￥</span>1000</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">重庆漆艺</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/3.jpg">
                                            <div class="price"><span>￥</span>60</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">龙灯彩扎工艺</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/7.jpg">
                                            <div class="price"><span>￥</span>90</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">九龙坡板鸭</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/4.jpg">
                                            <div class="price"><span>￥</span>300</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">荣昌夏布</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/8.jpg">
                                            <div class="price"><span>￥</span>10</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">涪陵榨菜</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/1.jpg">
                                            <div class="price"><span>￥</span>390</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">合川峡砚</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/5.jpg">
                                            <div class="price"><span>￥</span>180</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">折扇</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/2.jpg">
                                            <div class="price"><span>￥</span>160</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">朗溪竹板桥造纸</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/6.jpg">
                                            <div class="price"><span>￥</span>1000</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">重庆漆艺</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="sale">
                    <div class="featured-product-list indicator-style">
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/1.jpg">
                                            <div class="price"><span>￥</span>600</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">合川峡砚</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/5.jpg">
                                            <div class="price"><span>￥</span>60</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">荣昌折扇</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/2.jpg">
                                            <div class="price"><span>￥</span>240</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">朗溪竹板桥造纸</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/6.jpg">
                                            <div class="price"><span>￥</span>1000</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">重庆漆艺</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/3.jpg">
                                            <div class="price"><span>￥</span>60</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">龙灯彩扎工艺</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/7.jpg">
                                            <div class="price"><span>￥</span>90</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">九龙坡板鸭</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/4.jpg">
                                            <div class="price"><span>￥</span>300</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">荣昌夏布</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/8.jpg">
                                            <div class="price"><span>￥</span>10</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">涪陵榨菜</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/1.jpg">
                                            <div class="price"><span>￥</span>390</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">合川峡砚</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/5.jpg">
                                            <div class="price"><span>￥</span>180</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">折扇</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-p-banner">
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/2.jpg">
                                            <div class="price"><span>￥</span>160</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">朗溪竹板桥造纸</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single-banner">
                                    <div class="product-wrapper">
                                        <a href="#" class="single-banner-image-wrapper">
                                            <img alt="" src="/EPP_Project/legacy/Public/shop/img/featured/6.jpg">
                                            <div class="price"><span>￥</span>1000</div>
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
                                                <a href="#" title="Add to Wishlist">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                                <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                    <i class="fa fa-compress"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-bottom text-center">
                                        <a href="#">重庆漆艺</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Counter Area Start -->
<div class="counter-area section-padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="counter-info">
								<span class="fcount">
									<span class="counter">3725</span>
                                    位
								</span>
                        <h3>本周访客</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="counter-info">
								<span class="fcount">
									<span class="counter">950</span>
                                    名
								</span>
                        <h3>在线用户</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="counter-info">
								<span class="fcount">
									<span class="counter">1450</span>
                                    件商品
								</span>
                        <h3>总销售</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="counter-info">
								<span class="fcount">
									<span class="counter">62</span>
                                    条
								</span>
                        <h3>留言</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter Area End -->
<!-- Blog Area Start -->
<div class="blog-area section-padding">
    <h2 class="section-title">旅游项目</h2>
    <p>感受非遗地区的人文情怀！</p>
    <div class="container">
        <div class="row">
            <div class="blog-list indicator-style">
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="single-#">
                            <img src="/EPP_Project/legacy/Public/shop/img/blog/1.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="#"><h2>重庆之美</h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="#">三峡三日游</a></span>
                                <span class="blog-date">￥600</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="single-#">
                            <img src="/EPP_Project/legacy/Public/shop/img/blog/2.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="#"><h2>重庆之美</h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="#">三峡三日游</a></span>
                                <span class="blog-date">￥600</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="single-#">
                            <img src="/EPP_Project/legacy/Public/shop/img/blog/3.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="#"><h2>重庆之美</h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="#">三峡三日游</a></span>
                                <span class="blog-date">￥600</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="single-#">
                            <img src="/EPP_Project/legacy/Public/shop/img/blog/4.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="#"><h2>重庆之美</h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="#">三峡三日游</a></span>
                                <span class="blog-date">￥600</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="single-#">
                            <img src="/EPP_Project/legacy/Public/shop/img/blog/1.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="#"><h2>重庆之美</h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="#">三峡三日游</a></span>
                                <span class="blog-date">￥600</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-blog">
                        <a href="single-#">
                            <img src="/EPP_Project/legacy/Public/shop/img/blog/2.jpg" alt="">
                        </a>
                        <div class="blog-info text-center">
                            <a href="#"><h2>重庆之美</h2></a>
                            <div class="blog-info-bottom">
                                <span class="blog-author"> <a href="#">三峡三日游</a></span>
                                <span class="blog-date">￥600</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->

<!-- jquery latest version -->
<script src="https://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<!-- bootstrap js -->
<script src="/EPP_Project/legacy/Public/shop/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="/EPP_Project/legacy/Public/shop/js/owl.carousel.min.js"></script>
<!-- jquery-ui js -->
<script src="/EPP_Project/legacy/Public/shop/js/jquery-ui.min.js"></script>
<!-- jquery Counterup js -->
<script src="/EPP_Project/legacy/Public/shop/js/jquery.counterup.min.js"></script>
<script src="/EPP_Project/legacy/Public/shop/js/waypoints.min.js"></script>
<!-- jquery countdown js -->
<script src="/EPP_Project/legacy/Public/shop/js/jquery.countdown.min.js"></script>
<!-- jquery countdown js -->
<script type="text/javascript" src="/EPP_Project/legacy/Public/shop/venobox/venobox.min.js"></script>
<!-- jquery Meanmenu js -->
<script src="/EPP_Project/legacy/Public/shop/js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="/EPP_Project/legacy/Public/shop/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!-- scrollUp JS -->
<script src="/EPP_Project/legacy/Public/shop/js/jquery.scrollUp.min.js"></script>
<!-- plugins js -->
<script src="/EPP_Project/legacy/Public/shop/js/plugins.js"></script>
<!-- Nivo slider js -->
<script src="/EPP_Project/legacy/Public/shop/lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="/EPP_Project/legacy/Public/shop/lib/home.js" type="text/javascript"></script>
<!-- main js -->
<script src="/EPP_Project/legacy/Public/shop/js/main.js"></script>
</body>