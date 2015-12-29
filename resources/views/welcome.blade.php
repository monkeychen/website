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
                <div class="col-md-8 col-xs-8" style="padding: 0 5px 5px 0;"><img class="img-responsive" src="/static/images/img9.jpg"></div>
                <div class="col-md-4 col-xs-4" style="padding: 0 0 5px 5px;"><img class="img-responsive" src="/static/images/img5.jpg"></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-4" style="padding: 5px 5px 0 0"><img class="img-responsive" src="/static/images/img6.jpg"></div>
                <div class="col-md-4 col-xs-4" style="padding: 5px 5px 0 5px"><img class="img-responsive" src="/static/images/img7.jpg"></div>
                <div class="col-md-4 col-xs-4" style="padding: 5px 0 0 5px"><img class="img-responsive" src="/static/images/img8.jpg"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="content_left">
d
            </div>
        </div>
        <div class="col-md-8 article_list">
            <div class="row article_list_item">
                <div class="col-md-4 col-xs-4">
                    <img class="img-responsive" src="/static/images/img6.jpg">
                </div>
                <div class="col-md-8 col-xs-8">
                    <div class="row">
                        <div class="col-md-12 article_title">
                            关键业务系统的JVM启动参数推荐
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 article_subtitle">
                            2015-12-11
                            <a href="http://calvin1978.blogcn.com/articles/jvmoption-2.html" target="_blank">
                                江南白衣
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 article_summary">
                            <p>
                                在关键的业务系统里，除了继续追求技术人员最爱的高吞吐与低延时之外，系统的稳定性与出现问题时排查的便捷性也很重要。
                                这是本文的一个原则，后面也会一次又一次的强调，所以与网上其他的文章略有不同，请各位JVM调优高手和运维老大多提意见。
                            </p>
                            <p><a href="http://calvin1978.blogcn.com/articles/jvmoption-2.html" target="_blank">阅读全文</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row article_list_item">
                <div class="col-md-4">
                    <img class="img-responsive" src="/static/images/img11.png">
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 article_title">
                            并发框架Disruptor译文
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 article_subtitle">
                            2015-12-11
                            <a href="http://ifeve.com/disruptor/" target="_blank">
                                并发编程网
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 article_summary">
                            <p>
                                Martin Fowler在自己网站上写了一篇LMAX架构的文章，在文章中他介绍了LMAX是一种新型零售金融交易平台，
                                它能够以很低的延迟产生大量交易。这个系统是建立在JVM平台上，其核心是一个业务逻辑处理器，
                                它能够在一个线程里每秒处理6百万订单。
                            </p>
                            <p><a href="http://ifeve.com/disruptor/" target="_blank">阅读全文</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- FOOTER -->
{{--<footer class="footer">
    <div class="container">
        <p>&copy; 2015 <a href="http://simiam.com">Simiam</a> </p>
    </div>
</footer>--}}



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/static/js/jquery/jquery-1.11.3.min.js"></script>
<script src="/static/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>
