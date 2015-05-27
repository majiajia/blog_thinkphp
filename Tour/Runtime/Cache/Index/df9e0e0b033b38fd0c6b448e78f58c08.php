<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="gbk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="小樟树 - 一站式户外旅行">
    <meta name="keyword" content="小樟树 - 一站式户外旅行">

    <title><?php echo ($title); ?> - 一站式户外旅行</title>
    <!--<title>小樟树 - 一站式户外旅行</title>-->

    <!-- Bootstrap Core CSS -->
    <link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="__PUBLIC__/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="__PUBLIC__/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        footer img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/<?php echo strtolower(APP_NAME); ?>">小樟树</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">服务 <b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <?php
 $destUrl = '/'.strtolower(APP_NAME).'/ServiceList/index'.'/'.$item_index_strategy; echo "<a href='$destUrl'>"; ?>
                            <!--<a href="<?php echo U(GROUP_NAME.'/ServiceList/index');?>">-->
                                攻&nbsp;略
                            </a>
                        </li>
                        <li>
                            <!--<a href="<?php echo U(GROUP_NAME.'/ServiceList/index');?>">-->
                            <?php
 $destUrl = '/'.strtolower(APP_NAME).'/ServiceList/index'.'/'.$item_index_rent_car; echo "<a href='$destUrl'>"; ?>
                            租&nbsp;车</a>
                        </li>
                        <li>
                            <!--<a href="<?php echo U(GROUP_NAME.'/ServiceList/index');?>">-->
                            <?php
 $destUrl = '/'.strtolower(APP_NAME).'/ServiceList/index'.'/'.$item_index_take_pic; echo "<a href='$destUrl'>"; ?>
                                跟&nbsp;拍</a>
                        </li>
                        <li>
                            <!--<a href="<?php echo U(GROUP_NAME.'/ServiceList/index');?>">-->
                            <?php
 $destUrl = '/'.strtolower(APP_NAME).'/ServiceList/index'.'/'.$item_index_blog; echo "<a href='$destUrl'>"; ?>
                                纪&nbsp;实</a>
                        </li>
                        <!--<li>-->
                        <!--<a href="<?php echo U(GROUP_NAME.'/ShareDetail/index');?>">Single Portfolio Item</a>-->
                        <!--</li>-->
                    </ul>
                </li>
                <!--<li class="dropdown">-->
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">博客 <b class="caret"></b></a>-->
                <!--<ul class="dropdown-menu">-->
                <!--<li>-->
                <!--<a href="blog-home-1.html">Blog Home 1</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a href="blog-home-2.html">Blog Home 2</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a href="blog-post.html">Blog Post</a>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</li>-->
                <li>
                    <a href="<?php echo U(GROUP_NAME.'/BlogList/index');?>">博客</a>
                </li>
                <li>
                    <a href="<?php echo U(GROUP_NAME.'/Contact/index');?>">联系我们</a>
                </li>
                <li>
                    <a href="<?php echo U(GROUP_NAME.'/About/index');?>">关于我们</a>
                </li>
                <!--<li>-->
                <!--<a href="services.html">Services</a>-->
                <!--</li>-->

                <!--<li class="dropdown" style="display: none">-->
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>-->
                <!--<ul class="dropdown-menu">-->
                <!--<li>-->
                <!--<a href="full-width.html">Full Width Page</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a href="sidebar.html">Sidebar Page</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a href="faq.html">FAQ</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a href="404.html">404</a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a href="pricing.html">Pricing Table</a>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</li>-->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <!--<h1 class="page-header">Portfolio Item-->
            <!--<small>Subheading</small>-->
            <!--</h1>-->
            <br/>
            <ol class="breadcrumb">
                <li><a href="<?php echo U(GROUP_NAME.'/Index/index');?>">首页</a>
                </li>
                <li>
                    <a href="">
                        <?php echo ($service_name); ?>
                    </a></li>
                <li class="active">
                    <a href="">
                        <?php echo ($project_name); ?>
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class="row">

        <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php if(is_array($project_image_list)): foreach($project_image_list as $key=>$project_image_item): ?><div class="item <?php echo ($project_image_item["active"]); ?>">
                            <img class="img-responsive" src="__PUBLIC__/images/<?php echo ($project_image_item["image_name"]); ?>" alt="image">
                        </div><?php endforeach; endif; ?>
                    <!--<div class="item active">-->
                    <!--<img class="img-responsive" src="http://placehold.it/750x500" alt="">-->
                    <!--</div>-->
                    <!--<div class="item">-->
                    <!--<img class="img-responsive" src="http://placehold.it/750x500" alt="">-->
                    <!--</div>-->
                    <!--<div class="item">-->
                    <!--<img class="img-responsive" src="http://placehold.it/750x500" alt="">-->
                    <!--</div>-->
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <h3><?php echo ($project_name); ?></h3>
            <p><?php echo ($project_brief); ?></p>
            <h3>详情</h3>
            <ul>
                <?php if(is_array($project_detail_list)): foreach($project_detail_list as $key=>$project_detail_item): ?><li><?php echo ($project_detail_item["detail"]); ?></li><?php endforeach; endif; ?>
            </ul>
        </div>

    </div>
    <!-- /.row -->


    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">推荐服务</h3>
        </div>
        <?php if(is_array($relate_project_list)): foreach($relate_project_list as $key=>$relate_project_item): ?><div class="col-sm-3 col-xs-6">
                <?php
 $destUrl = '/'.strtolower(APP_NAME).'/ServiceDetail/index'.'/'.$relate_project_item["index"]; echo "<a href='$destUrl';'>"; ?>
                <!--<a href="<?php echo ($relate_project_item["index"]); ?>">-->
                <img class="img-responsive img-hover img-related" src="__PUBLIC__/images/<?php echo ($relate_project_item["image_name"]); ?>" alt="image">
                </a>
            </div><?php endforeach; endif; ?>
    </div>

    <hr>

    <footer>
    <div class="col-lg-4" style="display: inline-block;bottom: 0px;">
        <div class="col-lg-12">
            <p style="display: inline-block;">&copy; 小樟树 2015 版权所有 浙 ICP 备 12345678 号-1</p>
        </div>
    </div>
    <div class="col-lg-4" style="float: right;text-align: center">
        <div class="col-lg-12">
            <p style="display: inline-block">关注小樟树<br/>获得更多信息</p>
            <img src="__PUBLIC__/images/qrcode.jpg" alt="小樟树">
        </div>
    </div>
</footer>
    <!--<footer>-->
    <!--<div class="row">-->
    <!--<div class="col-lg-12">-->
    <!--<p>Copyright &copy; 小樟树 2015</p>-->
    <!--</div>-->
    <!--</div>-->
    <!--</footer>-->
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="__PUBLIC__/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="__PUBLIC__/js/bootstrap.min.js"></script>

</body>

</html>