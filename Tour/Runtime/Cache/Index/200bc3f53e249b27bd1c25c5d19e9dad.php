<?php if (!defined('THINK_PATH')) exit();?><!--<!DOCTYPE html>-->
<!--<html lang="en">-->

<!--<head>-->

    <!--<meta charset="utf-8">-->
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--<meta name="description" content="">-->
    <!--<meta name="author" content="">-->

    <!--<title>Modern Business - Start Bootstrap Template</title>-->

    <!--&lt;!&ndash; Bootstrap Core CSS &ndash;&gt;-->
    <!--<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet">-->

    <!--&lt;!&ndash; Custom CSS &ndash;&gt;-->
    <!--<link href="__PUBLIC__/css/modern-business.css" rel="stylesheet">-->

    <!--&lt;!&ndash; Custom Fonts &ndash;&gt;-->
    <!--<link href="__PUBLIC__/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->

    <!--&lt;!&ndash; HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries &ndash;&gt;-->
    <!--&lt;!&ndash; WARNING: Respond.js doesn't work if you view the page via file:// &ndash;&gt;-->
    <!--&lt;!&ndash;[if lt IE 9]>-->
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <!--<![endif]&ndash;&gt;-->

<!--</head>-->

<!--<body>-->
    <!--&lt;!&ndash; Navigation &ndash;&gt;-->
    <!--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">-->
        <!--<div class="container">-->
            <!--&lt;!&ndash; Brand and toggle get grouped for better mobile display &ndash;&gt;-->
            <!--<div class="navbar-header">-->
                <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">-->
                    <!--<span class="sr-only">Toggle navigation</span>-->
                    <!--<span class="icon-bar"></span>-->
                    <!--<span class="icon-bar"></span>-->
                    <!--<span class="icon-bar"></span>-->
                <!--</button>-->
                <!--<a class="navbar-brand" href="<?php echo U(GROUP_NAME.'/Index/index');?>">小樟树</a>-->
            <!--</div>-->
            <!--&lt;!&ndash; Collect the nav links, forms, and other content for toggling &ndash;&gt;-->
            <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
                <!--<ul class="nav navbar-nav navbar-right">-->
                    <!--<li class="dropdown">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">服务 <b class="caret"></b></a>-->
                        <!--<ul class="dropdown-menu dropdown-menu-right">-->
                            <!--<li>-->
                                <!--<a href="<?php echo U(GROUP_NAME.'/ServiceList/index');?>">攻&nbsp;略</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="<?php echo U(GROUP_NAME.'/ServiceList/index');?>">租&nbsp;车</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="<?php echo U(GROUP_NAME.'/ServiceList/index');?>">跟&nbsp;拍</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="<?php echo U(GROUP_NAME.'/ServiceList/index');?>">纪&nbsp;实</a>-->
                            <!--</li>-->
                            <!--&lt;!&ndash;<li>&ndash;&gt;-->
                            <!--&lt;!&ndash;<a href="portfolio-item.html">Single Portfolio Item</a>&ndash;&gt;-->
                            <!--&lt;!&ndash;</li>&ndash;&gt;-->
                        <!--</ul>-->
                    <!--</li>-->
                    <!--&lt;!&ndash;<li class="dropdown">&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="#" class="dropdown-toggle" data-toggle="dropdown">博客 <b class="caret"></b></a>&ndash;&gt;-->
                    <!--&lt;!&ndash;<ul class="dropdown-menu">&ndash;&gt;-->
                    <!--&lt;!&ndash;<li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="blog-home-1.html">Blog Home 1</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="blog-home-2.html">Blog Home 2</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="blog-post.html">Blog Post</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;</ul>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--<li>-->
                        <!--<a href="<?php echo U(GROUP_NAME.'/BlogList/index');?>">博客</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="<?php echo U(GROUP_NAME.'/Contact/index');?>">联系我们</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="<?php echo U(GROUP_NAME.'/About/index');?>">关于我们</a>-->
                    <!--</li>-->
                    <!--&lt;!&ndash;<li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="services.html">Services</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->

                    <!--&lt;!&ndash;<li class="dropdown" style="display: none">&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>&ndash;&gt;-->
                    <!--&lt;!&ndash;<ul class="dropdown-menu">&ndash;&gt;-->
                    <!--&lt;!&ndash;<li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="full-width.html">Full Width Page</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="sidebar.html">Sidebar Page</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="faq.html">FAQ</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="404.html">404</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<li>&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="pricing.html">Pricing Table</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                    <!--&lt;!&ndash;</ul>&ndash;&gt;-->
                    <!--&lt;!&ndash;</li>&ndash;&gt;-->
                <!--</ul>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.navbar-collapse &ndash;&gt;-->
        <!--</div>-->
        <!--&lt;!&ndash; /.container &ndash;&gt;-->
    <!--</nav>-->
    <!--&lt;!&ndash; Navigation &ndash;&gt;-->
    <!--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">-->
        <!--<div class="container">-->
            <!--&lt;!&ndash; Brand and toggle get grouped for better mobile display &ndash;&gt;-->
            <!--<div class="navbar-header">-->
                <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">-->
                    <!--<span class="sr-only">Toggle navigation</span>-->
                    <!--<span class="icon-bar"></span>-->
                    <!--<span class="icon-bar"></span>-->
                    <!--<span class="icon-bar"></span>-->
                <!--</button>-->
                <!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
            <!--</div>-->
            <!--&lt;!&ndash; Collect the nav links, forms, and other content for toggling &ndash;&gt;-->
            <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
                <!--<ul class="nav navbar-nav navbar-right">-->
                    <!--<li>-->
                        <!--<a href="about.html">About</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="services.html">Services</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="contact.html">Contact</a>-->
                    <!--</li>-->
                    <!--<li class="dropdown">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>-->
                        <!--<ul class="dropdown-menu">-->
                            <!--<li>-->
                                <!--<a href="portfolio-1-col.html">1 Column Portfolio</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="portfolio-2-col.html">2 Column Portfolio</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="portfolio-3-col.html">3 Column Portfolio</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="portfolio-4-col.html">4 Column Portfolio</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="portfolio-item.html">Single Portfolio Item</a>-->
                            <!--</li>-->
                        <!--</ul>-->
                    <!--</li>-->
                    <!--<li class="dropdown active">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>-->
                        <!--<ul class="dropdown-menu">-->
                            <!--<li>-->
                                <!--<a href="blog-home-1.html">Blog Home 1</a>-->
                            <!--</li>-->
                            <!--<li>-->
                                <!--<a href="blog-home-2.html">Blog Home 2</a>-->
                            <!--</li>-->
                            <!--<li class="active">-->
                                <!--<a href="blog-post.html">Blog Post</a>-->
                            <!--</li>-->
                        <!--</ul>-->
                    <!--</li>-->
                    <!--<li class="dropdown">-->
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
                <!--</ul>-->
            <!--</div>-->
            <!--&lt;!&ndash; /.navbar-collapse &ndash;&gt;-->
        <!--</div>-->
        <!--&lt;!&ndash; /.container &ndash;&gt;-->
    <!--</nav>-->
<!DOCTYPE html>
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
                <!--<h1 class="page-header">Blog Post-->
                    <!--<small>by <a href="#">Start Bootstrap</a>-->
                    <!--</small>-->
                <!--</h1>-->
                <br/>
                <ol class="breadcrumb">
                    <li><a href="<?php echo U(GROUP_NAME.'/Index/index');?>">首页</a>
                    </li>
                    <li class="active">文章</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <hr>

                <!-- Date/Time -->
                <p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">标题</p>
                <p>内容段1</p>
                <p>内容段1</p>
                <p>内容段1</p>
                <p>内容段1</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>留&nbsp;&nbsp;&nbsp;言:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">确&nbsp;&nbsp;定</button>
                    </form>
                </div>

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>搜&nbsp;&nbsp;索</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>归&nbsp;&nbsp;档</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php if(is_array($blog_cate_list_left)): foreach($blog_cate_list_left as $key=>$blog_cate_item): ?><li><a href="#"><?php echo ($blog_cate_item["cate_name"]); ?></a></li><?php endforeach; endif; ?>
                                <!--<li><a href="#">Category Name</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">Category Name</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">Category Name</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">Category Name</a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php if(is_array($blog_cate_list_right)): foreach($blog_cate_list_right as $key=>$blog_cate_item): ?><li><a href="#"><?php echo ($blog_cate_item["cate_name"]); ?></a></li><?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <!--<div class="well">-->
                    <!--<h4>Side Widget Well</h4>-->
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>-->
                <!--</div>-->
                <div class="well hotTagList">
                    <h4>热门标签</h4>
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="list-unstyled">
                                <?php if(is_array($tag_list_1)): foreach($tag_list_1 as $key=>$tag_item): ?><li><a href="#"><?php echo ($tag_item["tag_name"]); ?></a></li><?php endforeach; endif; ?>
                                <!--<li><a href="#">清新</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">风景</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">旅游</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">心情</a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <ul class="list-unstyled">
                                <?php if(is_array($tag_list_2)): foreach($tag_list_2 as $key=>$tag_item): ?><li><a href="#"><?php echo ($tag_item["tag_name"]); ?></a></li><?php endforeach; endif; ?>
                                <!--<li><a href="#">国外</a></li>-->
                                <!--<li><a href="#">浪漫</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">纯洁</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">幸福</a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-4">
                            <ul class="list-unstyled">
                                <?php if(is_array($tag_list_3)): foreach($tag_list_3 as $key=>$tag_item): ?><li><a href="#"><?php echo ($tag_item["tag_name"]); ?></a></li><?php endforeach; endif; ?>
                                <!--<li><a href="#">国外</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">浪漫</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">纯洁</a>-->
                                <!--</li>-->
                                <!--<li><a href="#">幸福</a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </div>

        </div>
        <!-- /.row -->

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
        <!-- Footer -->
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