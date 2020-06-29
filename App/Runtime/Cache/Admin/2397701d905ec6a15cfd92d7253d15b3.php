<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>后台管理系统</title>
    <style type="text/css">
        .dropdown-submenu { position: relative; } .dropdown-submenu>.dropdown-menu { top: 0; left: 100%; margin-top: -6px; margin-left: -1px; -webkit-border-radius: 0 6px 6px 6px; -moz-border-radius: 0 6px 6px; border-radius: 0 6px 6px 6px; } .dropdown-submenu:hover>.dropdown-menu { display: block; } .dropdown-submenu>a:after { display: block; content: " "; float: right; width: 0; height: 0; border-color: transparent; border-style: solid; border-width: 5px 0 5px 5px; border-left-color: #ccc; margin-top: 5px; margin-right: -10px; } .dropdown-submenu:hover>a:after { border-left-color: #fff; } .dropdown-submenu.pull-left { float: none; } .dropdown-submenu.pull-left>.dropdown-menu { left: -100%; margin-left: 10px; -webkit-border-radius: 6px 0 6px 6px; -moz-border-radius: 6px 0 6px 6px; border-radius: 6px 0 6px 6px; }
    </style>
    <link href="/legacy/Public/Admin/css/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" />
    <script src="/legacy/Public/bootstrap/js/jquery.js"></script>
    <script src="/legacy/Public/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript"></script>
</head>
<body>
<!--页头-->
<div class="header">
    <nav>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">非遗后台管理系统</a>
            </div>
            <!--Collect the nav linnks, forms, and other content for toggling-->
            <div class="collapse navbar-collapse navbar-ex1-collapse " id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav activemenu ">
                    <li class=""><a href="/legacy/Admin/Index/index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 首页</a></li>
                    <li class="dropdown">
                        <a href="/legacy/Admin/Guest/index" class="dropdown-toggle active1" data-toggle="dropdown"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> 顾客管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/legacy/Admin/Guest/index">查看顾客</a></li>
                            <li><a href="/legacy/Admin/Guest/searchguest">查询顾客</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/legacy/Admin/Goods/index" class="dropdown-toggle active2" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 商品管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/legacy/Admin/Goods/index">查看商品</a></li>
                            <li><a href="/legacy/Admin/Goods/add">添加商品</a></li>
                            <li><a href="/legacy/Admin/Goods/search">查询商品</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/legacy/Admin/Travel/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> 旅游管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/legacy/Admin/Travel/index">查看景点</a></li>
                            <li><a href="/legacy/Admin/Travel/add">增加景点</a></li>
                            <li> <a href="/legacy/Admin/Travel/search">查询景点</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/legacy/Admin/Notice/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 信息管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="/legacy/Admin/Notice/index">公告管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/legacy/Admin/Notice/index">查看公告</a></li>
                                    <li><a href="/legacy/Admin/Notice/add">增加公告</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/legacy/Admin/Dynamic/index" class="dropdown-toggle" data-toggle="dropdown">动态管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/legacy/Admin/Dynamic/index">查看动态</a></li>
                                    <li><a href="/legacy/Admin/Dynamic/add">增加动态</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/legacy/Admin/Inheritor/index" class="dropdown-toggle" data-toggle="dropdown">传承人管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/legacy/Admin/Inheritor/index">查看传承人</a></li>
                                    <li><a href="/legacy/Admin/Inheritor/add">增加传承人</a></li>
                                    <li><a href="/legacy/Admin/Inheritor/search">查询传承人</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="/legacy/Admin/Inheritor/index" class="dropdown-toggle" data-toggle="dropdown">政策管理</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/legacy/Admin/Policy/index">查看政策</a></li>
                                    <li><a href="/legacy/Admin/Policy/add">增加政策</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="/legacy/Admin/Message/index" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 留言管理<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/legacy/Admin/Message/index">查看留言</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#"><?php $time=date("Y-m-d H:i"); echo $time ?></a></li>
                    <li class="dropdown">
                    <a href="#"  class="dropdown-toggle " data-toggle="dropdown">admin<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/legacy/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>前台首页</a></li>
                        </ul>
                    </li>
                    <li><a href="/legacy/Admin/Login/logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>退出</a></li>
                </ul>
            </div>
        </nav>
    </nav>
</div>


<!--<script>
    $(document).ready(function () {
        $(".activemenu li a").each(function () {
            $this=$(this);
            if($this[0].href==String(window.location)){
                $this.parent().addClass("active");
            }
        });
    });
</script>-->

<div id="content">
    <div class="item">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>旅游</title>
</head>
<body>
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
    <ul class="list-group">
        <a href="/legacy/Admin/Guest/index" class="list-group-item">查看顾客</a>
        <a href="/legacy/Admin/Guest/searchguest" class="list-group-item active">查询顾客</a>
    </ul>
</div>
<!--右侧主要内容-->
<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>查询顾客</h1>
        </div>
        <div class="panel-body">
            <form class="form-inline" role="form" method="get" action="/legacy/Admin/Guest/searchguest_ok">
                <div class="form-group">
                    <label class="sr-only" for="name">顾客id：</label>
                    <input type="text" class="form-control" id="name" name="uid" placeholder="请输入顾客id">
                </div>
                <button type="submit" class="btn btn-default">搜索🔍</button>
            </form>
        </div>
    </div>
</div>
</body>
</html></div>
</div>

</body>
</html>