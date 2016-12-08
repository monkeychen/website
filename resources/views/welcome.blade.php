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
                    <li data-target="#bannerCarousel" data-slide-to="2"></li>
                    <li data-target="#bannerCarousel" data-slide-to="3"></li>
                    <li data-target="#bannerCarousel" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php $i = 0; ?>
                    @foreach($photoArr as $photo)
                    <div class="item @if($i == 0) active @endif">
                        <img src="{{$photo->url}}" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <p>{{$photo->title}}</p>
                            </div>
                        </div>
                    </div>
                        <?php $i++; ?>
                    @endforeach
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
                <div class="col-md-8 col-xs-8" style="padding: 0 5px 5px 0;"><img class="img-responsive" src="{{$photoArr[3]->url}}"></div>
                <div class="col-md-4 col-xs-4" style="padding: 0 0 5px 5px;"><img class="img-responsive" src="{{$photoArr[4]->url}}"></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-4" style="padding: 5px 5px 0 0"><img class="img-responsive" src="{{$photoArr[5]->url}}"></div>
                <div class="col-md-4 col-xs-4" style="padding: 5px 5px 0 5px"><img class="img-responsive" src="{{$photoArr[6]->url}}"></div>
                <div class="col-md-4 col-xs-4" style="padding: 5px 0 0 5px"><img class="img-responsive" src="{{$photoArr[7]->url}}"></div>
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
            <?php $i = 0; ?>
            @foreach($categories as $category)
                <li @if($i == 0)class="active"@endif>
                    <a href="#{{$category->code}}_tab" data-toggle="tab">{{$category->name}} </a>
                </li>
                <?php $i++; ?>
            @endforeach
            </ul>
            <div id="article_list_tab_content" class="tab-content">
                <?php $i = 0; ?>
                @foreach($categories as $category)
                <div class="tab-pane fade @if($i == 0)in active @endif " id="{{$category->code}}_tab">
                    @foreach($category->articles as $article)
                    <div class="row article_list_item">
                        <div class="col-md-4 col-xs-4">
                            <img class="img-responsive" src="{{$article->pic_url}}">
                        </div>
                        <div class="col-md-8 col-xs-8">
                            <div class="row">
                                <div class="col-md-12 article_title">
                                    {{$article->title}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 article_subtitle">
                                    2015-12-11
                                    <a href="{{$article->src_url}}" target="_blank">
                                        {{$article->author}}
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 article_summary">
                                    <p>
                                        {{$article->summary}}
                                    </p>
                                    <p><a href="{{$article->src_url}}" target="_blank">阅读全文</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                    <?php $i++; ?>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
