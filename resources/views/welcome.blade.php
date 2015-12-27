<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/static/images/icon.png">

    <title>Simiam</title>

    <!-- Bootstrap core CSS -->
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/common.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://simiam.com"><img class="logo_img" src="/static/images/logo.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="http://simiam.com">首页</a></li>
                <li role="presentation" class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                       aria-haspopup="true" aria-expanded="false">应用 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="http://tech.simiam.com" target="_blank">Github博客</a></li>
                        <li><a href="http://100.simiam.com" target="_blank">教研平台</a></li>
                        <li><a href="http://timecart.simiam.com" target="_blank">商城演示</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索">
                </div>
                <button type="submit" class="btn btn-success">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">登录</a></li>
                <li><a href="#">注册</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#bannerCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#bannerCarousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="second-slide" src="/static/images/img2.jpg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <p>台湾</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img class="third-slide" src="/static/images/img3.jpg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <p>台湾</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#bannerCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#bannerCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- /.carousel -->
        </div>
        <div class="col-md-6 banner_left">
            <div class="row">
                <div class="col-md-8" style="padding: 0 5px 5px 0;"><img src="/static/images/img9.jpg"></div>
                <div class="col-md-4" style="padding: 0 0 5px 5px;"><img src="/static/images/img5.jpg"></div>
            </div>
            <div class="row">
                <div class="col-md-4" style="padding: 5px 5px 0 0"><img src="/static/images/img6.jpg"></div>
                <div class="col-md-4" style="padding: 5px 5px 0 5px"><img src="/static/images/img7.jpg"></div>
                <div class="col-md-4" style="padding: 5px 0 0 5px"><img src="/static/images/img8.jpg"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="content_left">
d
            </div>
        </div>
        <div class="col-md-8 content_right">
            <div class="row content_right_item">
                <div class="col-md-4">
                    <img src="/static/images/img6.jpg">
                </div>
                <div class="col-md-8">
                    <div class="row">
                        文章标题
                    </div>
                    <div class="row">
                        文章来源
                    </div>
                    <div class="row">
                        内容摘要
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2015 <a href="http://simiam.com">Simiam</a> </p>
    </div>
</footer>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/static/js/jquery/jquery-1.11.3.min.js"></script>
<script src="/static/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>
