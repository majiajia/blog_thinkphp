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
                    <!--<li class="active">-->
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
                    <!--<li class="dropdown">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>-->
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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <!--<h1 class="page-header">Contact-->
                    <!--<small>Subheading</small>-->
                <!--</h1>-->
                <br/>
                <ol class="breadcrumb">
                    <li><a href="<?php echo U(GROUP_NAME.'/Index/index');?>">首页</a>
                    </li>
                    <li class="active">联系我们</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <!--<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://map.baidu.com/">-->

                <!--</iframe>-->
                <div style="width:700px;height:350px;border:#ccc solid 1px;font-size:12px" id="map"></div>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>联系方式</h3>
                <p>
                    <?php echo ($detail_address); ?><br><?php echo ($brief_address); ?><br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: <?php echo ($tele_phone); ?></p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:<?php echo ($mail_address); ?>"><?php echo ($mail_address); ?></a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: <?php echo ($work_time); ?></p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>告诉我们你的需求</h3>
                <form name="sentMessage" id="contactForm" method="post" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>你的名字:</label><label>你的名字:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>电话号码:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>电子邮箱:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>请详细描述你的需求:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="button" class="btn btn-primary" id="send_demand">发送</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span id="submit_remind"></span>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

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

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="__PUBLIC__/js/jqBootstrapValidation.js"></script>
    <script src="__PUBLIC__/js/contact_me.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=MYZZTjyxozomxorYeX3oxUSe"></script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){
        map = new BMap.Map("map");
        map.centerAndZoom(new BMap.Point(113.636972,34.752604),15);
    }
    function setMapEvent(){
        map.enableScrollWheelZoom();
        map.enableKeyboard();
        map.enableDragging();
        map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
        target.addEventListener("click",function(){
            target.openInfoWindow(window);
        });
    }
    function addMapOverlay(){
        var markers = [
            {content:"",title:"樟树旅行",imageOffset: {width:0,height:3},position:{lat:34.756993,lng:113.637906}}
        ];
        for(var index = 0; index < markers.length; index++ ){
            var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
            var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
            })});
            var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
            var opts = {
                width: 200,
                title: markers[index].title,
                enableMessage: false
            };
            var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
            marker.setLabel(label);
            addClickHandler(marker,infoWindow);
            map.addOverlay(marker);
        };
    }
    //向地图添加控件
    function addMapControl(){
        var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
        map.addControl(scaleControl);
        var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(navControl);
        var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
        map.addControl(overviewControl);
    }
    var map;
    initMap();
</script>
<script type="text/javascript">
    var sendDemandHandleURL = "<?php echo U(GROUP_NAME.'/Contact/submitDemand');?>";

    $('#send_demand').on('click',function(){
        var name = $('#name');
        var phone = $('#phone');
        var email = $('#email');
        var message = $('#message');

        if((name.val() == '') || (phone.val() == '') || email.val() == '' || message.val() == '') {
            $('#submit_remind').html('please submit more message');
            return false;
        }

        $.ajax({
            url: sendDemandHandleURL,
            type: 'POST',
            dataType: 'json',
            data: {
                name: name.val(),
                phone: phone.val(),
                email: email.val(),
                message:message.val()
            },
            async: false,
            success: function (data) {
                if(data.status == 0) {
                    $('#submit_remind').html('submit succes ! thank you!');
                    name.val("");
                    phone.val("");
                    email.val("");
                    message.val("");
                }
            },
            error: function (data) {
                $('#submit_remind').html('submit error! please retry!');
            }
        })
    })
</script>
</body>
</html>