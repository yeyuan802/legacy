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
                            <a href="#">
                                <i class="flaticon-shop"></i>
                                <span>2</span>
                            </a>
                            <div class="add-to-cart-product">
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="/test/legacy/Public/shop/img/featured/1.jpg" alt="">
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
                                            <img src="/test/legacy/Public/shop/img/featured/1.jpg" alt="">
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
        </div>
    </div>
</div>
<!--Header Area End-->
<!-- Single Product Area Start -->
<div class="single-product-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <div class="single-product-image-inner">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="one">
                            <a class="venobox" href="/test/legacy/Public/shop/img/single-product/<?php echo ($sList['goodname']); ?>.jpg" data-gall="gallery" title="">
                                <img src="/test/legacy/Public/shop/img/single-product/<?php echo ($sList['goodname']); ?>.jpg" alt="">
                            </a>
                        </div>

                    </div>
                    <!-- Nav tabs -->
                    <ul class="product-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#one" aria-controls="one" role="tab" data-toggle="tab"><img src="/test/legacy/Public/shop/img/single-little/<?php echo ($sList['goodname']); ?>.jpg" alt=""></a></li>
                        <li role="presentation"><a href="#two" aria-controls="two" role="tab" data-toggle="tab"><img src="/test/legacy/Public/shop/img/single-little/<?php echo ($sList['goodname']); ?>.jpg" alt=""></a></li>
                        <li role="presentation"><a href="#three" aria-controls="three" role="tab" data-toggle="tab"><img src="/test/legacy/Public/shop/img/single-little/<?php echo ($sList['goodname']); ?>.jpg" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="single-product-details">
                    <div class="list-pro-rating">
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star icolor"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h2><?php echo ($sList['goodname']); ?></h2>
                    <div class="availability">
                        <span>
                            <?php if($sList['status'] == 1): ?>在售
                            <?php else: ?>
                                暂未销售<?php endif; ?>
                        </span>
                    </div>
                    <p><?php echo ($sList['introduce']); ?></p>
                    <div class="single-product-price">
                        <h2>￥<?php echo ($sList['price']); ?></h2>
                    </div>
                    <div class="product-attributes clearfix">
                                <span class="pull-left" id="quantity-wanted-p">
									<span class="dec qtybutton">-</span>
									<input type="text" value="1" class="cart-plus-minus-box">
									<span class="inc qtybutton">+</span>
								</span>
                        <span>
                                    <a class="cart-btn btn-default" href="cart.html">
                                        <i class="flaticon-shop"></i>
                                        加入购物车
                                    </a>
                               </span>
                    </div>
                    <div class="add-to-wishlist">
                        <a class="wish-btn" href="cart.html">
                            <i class="fa fa-heart-o"></i>
                            加入收藏
                        </a>
                    </div>

                    
                    <div id="product-comments-block-extra">
                        <ul class="comments-advices">
                            <li>
                                <a href="#" class="open-comment-form">写下你的意见</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="p-details-tab-content">
                    <div class="p-details-tab">
                        <ul class="p-details-nav-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#more-info" aria-controls="more-info" role="tab" data-toggle="tab">介绍</a></li>
                            <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">规格</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="tab-content review">
                        <div role="tabpanel" class="tab-pane active" id="more-info">
                            <p><?php echo ($sList['introduce']); ?></p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="data">
                            <table class="table-data-sheet">
                                <tbody>
                                <tr class="odd">
                                    <td>类型</td>
                                    <td><?php if($sList['type'] == food): ?>食品
                                        <?php else: ?>
                                        工艺品<?php endif; ?></td>
                                </tr>
                                <tr class="even">
                                    <td>剩余数量</td>
                                    <td><?php echo ($sList['total']); ?></td>
                                </tr>
                                <tr class="odd">
                                    <td>上架时间</td>
                                    <td><?php echo ($sList['time']); ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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