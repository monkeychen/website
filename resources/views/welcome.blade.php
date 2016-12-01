@extends('layouts.app')

@section('content')

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
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#weibo_tab" data-toggle="tab">微博 </a>
                </li>
                <li><a href="#weixin_tab" data-toggle="tab">微信 </a></li>
            </ul>
            <div id="social_tab_content" class="tab-content">
                <div class="tab-pane fade in active" id="weibo_tab">
                    <div class="row social_list_item">
                        <div class="col-md-12 col-xs-12">
                            测试内容1
                        </div>
                    </div>
                    <div class="row social_list_item">
                        <div class="col-md-12 col-xs-12">
                            测试内容2
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="weixin_tab">
                    <div class="row social_list_item">
                        <div class="col-md-12 col-xs-12">
                            测试内容3
                        </div>
                    </div>
                    <div class="row social_list_item">
                        <div class="col-md-12 col-xs-12">
                            测试内容4
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_left">

            </div>
        </div>
        <div class="col-md-8 article_list">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#all_articles_tab" data-toggle="tab">全部 </a>
                </li>
                <li><a href="#news_articles_tab" data-toggle="tab">资讯 </a></li>
                <li class="dropdown">
                    <a href="#" id="tech_dropdown" class="dropdown-toggle" data-toggle="dropdown">技术 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="tech_dropdown">
                        <li><a href="#tech_java_articles_tab" tabindex="0" data-toggle="tab">Java</a></li>
                        <li><a href="#tech_php_articles_tab" tabindex="1" data-toggle="tab">PHP</a></li>
                    </ul>
                </li>
            </ul>
            <div id="article_list_tab_content" class="tab-content">
                <div class="tab-pane fade in active" id="all_articles_tab">
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
                        <div class="col-md-4 col-xs-4">
                            <img class="img-responsive" src="/static/images/img11.png">
                        </div>
                        <div class="col-md-8 col-xs-8">
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

                <div class="tab-pane fade" id="news_articles_tab">
                    <div class="row article_list_item">
                        <div class="col-md-4 col-xs-4">
                            <img class="img-responsive" src="/static/images/img11.png">
                        </div>
                        <div class="col-md-8 col-xs-8">
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
                <div class="tab-pane fade" id="tech_java_articles_tab">
                    <div class="row article_list_item">
                        <div class="col-md-4 col-xs-4">
                            <img class="img-responsive" src="/static/images/img11.png">
                        </div>
                        <div class="col-md-8 col-xs-8">
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
                <div class="tab-pane fade" id="tech_php_articles_tab">
                    <div class="row article_list_item">
                        <div class="col-md-4 col-xs-4">
                            <img class="img-responsive" src="/static/images/img11.png">
                        </div>
                        <div class="col-md-8 col-xs-8">
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
    </div>
</div>

@endsection
