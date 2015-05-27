<?php if (!defined('THINK_PATH')) exit();?>    <!DOCTYPE html>
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
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php if(is_array($header_list)): foreach($header_list as $key=>$header): ?><div class="item <?php echo ($header["status"]); ?>">
                    <div class="fill" style="background-image:url('__PUBLIC__/images/home-banner-phone.jpg');"></div>
                    <div class="carousel-caption">
                    <h2><?php echo ($header["caption"]); ?></h2>
                    </div>
                </div><?php endforeach; endif; ?>
            <!--<div class="item active">-->
                <!--<div class="fill" style="background-image:url('__PUBLIC__/images/home-banner-phone.jpg');"></div>-->
                <!--<div class="carousel-caption">-->
                    <!--<h2>Caption 1</h2>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="item">-->
                <!--<div class="fill" style="background-image:url('__PUBLIC__/images/home-banner-phone.jpg');"></div>-->
                <!--<div class="carousel-caption">-->
                    <!--<h2>Caption 2</h2>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="item">-->
                <!--&lt;!&ndash;<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>&ndash;&gt;-->
                <!--<div class="fill" style="background-image:url('__PUBLIC__/images/home-banner-phone.jpg');"></div>-->
                <!--<div class="carousel-caption">-->
                    <!--<h2>Caption 3</h2>-->
                <!--</div>-->
            <!--</div>-->
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">提供的服务</h2>
            </div>
            <div class="col-md-3 col-sm-6" id="ServiceStrategy">
                <?php
 $destUrl = '/'.strtolower(APP_NAME).'/ServiceList/index'.'/'.$item_index_strategy; echo "<a href='$destUrl' style='text-decoration: none;'>"; ?>
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <span class="fa-stack fa-5x">
                                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                  <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <h4>攻&nbsp;&nbsp;略</h4>
                            <p><?php echo ($service_strategy_brief); ?></p>
                            <!--<a href="#" class="btn btn-primary">Learn More(详情)</a>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6" id="ServiceRentCar" style="text-decoration: none;">
                <?php
 $destUrl = '/'.strtolower(APP_NAME).'/ServiceList/index'.'/'.$item_index_rent_car; echo "<a href='$destUrl' style='text-decoration: none;'>"; ?>
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <span class="fa-stack fa-5x">
                                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                  <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <h4>租&nbsp;&nbsp;车</h4>
                            <p><?php echo ($service_rentcar_brief); ?></p>
                            <!--<a href="#" class="btn btn-primary">Learn More</a>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6" id="ServiceTakePic" style="text-decoration: none;">
                <?php
 $destUrl = '/'.strtolower(APP_NAME).'/ServiceList/index'.'/'.$item_index_take_pic; echo "<a href='$destUrl' style='text-decoration: none;'>"; ?>
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <span class="fa-stack fa-5x">
                                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                  <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <h4>跟&nbsp;&nbsp;拍</h4>
                            <p><?php echo ($service_takepic_brief); ?></p>
                            <!--<a href="#" class="btn btn-primary">Learn More</a>-->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6" id="ServiceBlog" style="text-decoration: none;">
                <?php
 $destUrl = '/'.strtolower(APP_NAME).'/ServiceList/index'.'/'.$item_index_blog; echo "<a href='$destUrl' style='text-decoration: none;'>"; ?>
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <span class="fa-stack fa-5x">
                                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                  <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <div class="panel-body">
                            <h4>纪&nbsp;&nbsp;实</h4>
                            <p><?php echo ($service_blog_brief); ?></p>
                            <!--<a href="#" class="btn btn-primary">Learn More</a>-->
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Marketing Icons Section -->
        <!--<div class="row" style="display: none">-->
            <!--<div class="col-lg-12">-->
                <!--<h1 class="page-header">-->
                    <!--Welcome to Modern Business-->
                <!--</h1>-->
            <!--</div>-->
            <!--<div class="col-md-4">-->
                <!--<div class="panel panel-default">-->
                    <!--<div class="panel-heading">-->
                        <!--<h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>-->
                    <!--</div>-->
                    <!--<div class="panel-body">-->
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>-->
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-4">-->
                <!--<div class="panel panel-default">-->
                    <!--<div class="panel-heading">-->
                        <!--<h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>-->
                    <!--</div>-->
                    <!--<div class="panel-body">-->
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>-->
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-4">-->
                <!--<div class="panel panel-default">-->
                    <!--<div class="panel-heading">-->
                        <!--<h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>-->
                    <!--</div>-->
                    <!--<div class="panel-body">-->
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>-->
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">精彩分享</h2>
            </div>
            <?php if(is_array($share_list)): foreach($share_list as $key=>$share_item): ?><div class="col-md-4 col-sm-6" title="<?php echo ($share_item["title"]); ?>">
                    <?php
 $destUrl = '/'.strtolower(APP_NAME)."/ShareDetail/index/".$share_item["item_index"]; echo "<a href='$destUrl'>"; ?>
                    <!--<a href="#">-->
                    <!--<a href='<?php echo U(GROUP_NAME."/ShareDetail/index/") ;?>'>-->

                        <img class="img-responsive img-portfolio img-hover" src="__PUBLIC__/images/<?php echo ($share_item["image_name"]); ?>" alt="share">
                    </a>
                </div><?php endforeach; endif; ?>

            <!--<div class="col-md-4 col-sm-6">-->
                <!--<a href="<?php echo U(GROUP_NAME.'/ShareDetail/index');?>">-->
                    <!--<img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">-->
                <!--</a>-->
            <!--</div>-->
            <!--<div class="col-md-4 col-sm-6">-->
                <!--<a href="<?php echo U(GROUP_NAME.'/ShareDetail/index');?>">-->
                    <!--<img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">-->
                <!--</a>-->
            <!--</div>-->
            <!--<div class="col-md-4 col-sm-6">-->
                <!--<a href="<?php echo U(GROUP_NAME.'/ShareDetail/index');?>">-->
                    <!--<img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">-->
                <!--</a>-->
            <!--</div>-->
            <!--<div class="col-md-4 col-sm-6">-->
                <!--<a href="<?php echo U(GROUP_NAME.'/ShareDetail/index');?>">-->
                    <!--<img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">-->
                <!--</a>-->
            <!--</div>-->
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <!--<div class="row" style="display: none">-->
            <!--<div class="col-lg-12">-->
                <!--<h2 class="page-header">Modern Business Features</h2>-->
            <!--</div>-->
            <!--<div class="col-md-6">-->
                <!--<p>The Modern Business template by Start Bootstrap includes:</p>-->
                <!--<ul>-->
                    <!--<li><strong>Bootstrap v3.2.0</strong>-->
                    <!--</li>-->
                    <!--<li>jQuery v1.11.0</li>-->
                    <!--<li>Font Awesome v4.1.0</li>-->
                    <!--<li>Working PHP contact form with validation</li>-->
                    <!--<li>Unstyled page elements for easy customization</li>-->
                    <!--<li>17 HTML pages</li>-->
                <!--</ul>-->
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>-->
            <!--</div>-->
            <!--<div class="col-md-6">-->
                <!--<img class="img-responsive" src="http://placehold.it/700x450" alt="">-->
            <!--</div>-->
        <!--</div>-->
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <!--<div class="well" style="display: none;">-->
            <!--<div class="row">-->
                <!--<div class="col-md-8">-->
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                    <!--<a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->

        <!--<hr>-->

        <!-- Footer -->
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
            <!--<div class="col-lg-4" style="display: inline-block;bottom: 0px;">-->
                <!--<div class="col-lg-12">-->
                    <!--<p style="display: inline-block;">&copy; 小樟树 2015 版权所有 浙 ICP 备 12345678 号-1</p>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="col-lg-4" style="float: right;text-align: center">-->
                <!--<div class="col-lg-12">-->
                    <!--<p style="display: inline-block">关注小樟树<br/>获得更多信息</p>-->
                    <!--<a href="#"><img src="__PUBLIC__/images/qrcode.jpg" alt="小樟树"></a>-->
                <!--</div>-->
            <!--</div>-->
        <!--</footer>-->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="__PUBLIC__/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>