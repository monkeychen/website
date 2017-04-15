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
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?166ffae0dde10b5434e17a1a216833e5";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    {{--<style type="text/css">
        @import url(//www.google.com/cse/api/branding.css);
    </style>--}}
    <link href="/static/css/branding.css" rel="stylesheet">
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
                @foreach($topMenus as $topMenu)
                    @if(count($topMenu->subMenus) > 0)
                        <li role="presentation" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">{{$topMenu->name}} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach($topMenu->subMenus as $subMenu)
                                <li><a href="{{$subMenu->link_url}}" target="_blank">{{$subMenu->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="{{$topMenu->link_url}}">{{$topMenu->name}}</a></li>
                    @endif
                @endforeach
            </ul>
            {{--<form class="navbar-form navbar-left" role="search">--}}
                {{--<div class="form-group">--}}
                    {{--<input type="text" class="form-control" placeholder="搜索">--}}
                {{--</div>--}}
                {{--<button type="submit" class="btn btn-success">--}}
                    {{--<span class="glyphicon glyphicon-search" aria-hidden="true"></span>--}}
                {{--</button>--}}
            {{--</form>--}}
            {{--<ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    --}}{{--<li><a href="/auth/register">注册</a></li>--}}{{--
                    <li><a href="/auth/login">登录</a></li>
                @else
                    <li class="navbar-text">{{ Auth::user()->name }}</li>
                    <li><a href="/auth/logout">退出</a></li>
                @endif
            </ul>--}}
            <ul class="nav navbar-nav navbar-right">
                <div class="cse-branding-right" style="background-color:#FFFFFF;color:#000000;margin-top: 13px;">
                    <div class="cse-branding-form">
                        <form action="https://www.google.com.hk" id="cse-search-box" target="_blank">
                            <div>
                                <input type="hidden" name="cx" value="partner-pub-5437280150717848:9370427216" />
                                <input type="hidden" name="ie" value="UTF-8" />
                                <input type="text" name="q" size="20" />
                                <input type="submit" name="sa" value="Google" />
                            </div>
                        </form>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</nav>

@yield('content')
<br>
<br>
<br>
<!-- FOOTER -->
<nav class="navbar navbar-fixed-bottom">
    <div id="footer">
        <div class="container">
            <p class="text-info">&copy; {{ $cp_year }} </p>
        </div>
    </div>
</nav>





<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/static/js/jquery/jquery-1.11.3.min.js"></script>
<script src="/static/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>
