@extends('layouts.web-no-banner')

@section('content')
<!-- Search -->
   <!-- <div class="t-c header-title pd-b-10">
       <h2>
           海南体育赛事官网
       </h2>
    </div> -->
    <!-- End Search -->
    <div class="container border-b">
        首页&nbsp;>&nbsp;新闻
    </div>
    <section class="pd-t-20 pd-b-20" id="news-detail">
         <div class="container">
            <div class="row">
                <div class="col-md-12  pd-b-10 t-c">
                    <h4>{{$data->title}}</h4>
                    <p>发布时间 {{$data->newtime}}   来源：{{$data->resource}}</p>
                </div>
                <div class="t-r">
                    <span>阅读数：{{$data->read_count}}人</span>
                    <span class="pd-l-10">  收藏：{{$data->collect_count}}人</span>
                    <span class="pd-l-10">   参与人数：{{$data->click_count}}人</span>
                </div>
            </div>
            <div class="row news-content">
                <?php
                    echo "{$data->content}";
                ?>
              
            </div>
            <div id="my-app">
                <div class="t-r msg-handle">
                    <span><img src="{{asset('images/news/collect.png')}}"></span><span class="pd-l-20"><img src="{{asset('images/news/share.png')}}"></span>
                
                    <!-- JiaThis Button BEGIN -->
                    <div class="jiathis_style">
                        <span class="jiathis_txt">分享到：</span>
                        <a class="jiathis_button_tools_1"></a>
                        <a class="jiathis_button_tools_2"></a>
                        <a class="jiathis_button_tools_3"></a>
                        <a class="jiathis_button_tools_4"></a>
                        <!-- <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a> -->
                    </div>
                   
                    <!-- JiaThis Button END -->
                </div>
             
                <div class="row pd-t-50">
                    <!-- <form action="{{url('comments/add')}}" method="Post"> -->
                        <input type="hidden" name="uuid" id="news_uuid" value="{{$data->news_uuid}}">
                        <div class="col-md-2 t-r">
                            <img src="{{asset('images/news/m_1.png')}}" class="img-circle">
                        </div>
                        
                        <div class="col-md-9">
                            <textarea class="news-ipt" rows="3" width="80%" name="content" id="content" v-model="newsdata.content"></textarea>
                            <p class="t-r">
                                <!-- <button>登录并发布</button> -->
                                <button type="button" class="btn btn-warning" v-on:click="docomments()">登录并发布</button>
                            </p>
                        </div>
                        <div class="col-md-1">
                            
                        </div>
                    <!-- </form> -->
                </div>
                <div class="msg pd-t-50">

                    <div v-for="(item,index) in newslist" class="row border-t-dashed pd-t-10 pd-b-10">
                        <div class="row msg-item">
                            <div class="col-md-1 head-img"><img src="{{asset('images/news/m_1.png')}}" class="img-circle"></div>
                            <div class="col-md-11">
                                <div class="col-md-10">
                                    <p><span class="user-name">@{{item.user_name}}</span><!-- <span class="pd-l-20">[来自哪颗星系]</span> --></p>
                                </div>
                                <div class="col-md-2 t-r">
                                    @{{item.created_at}}
                                </div>
                                <div class="col-md-12">
                                    @{{item.content}}
                                </div>
                                <div class="t-r col-md-12">
                                    <a href="javascript:void(0);" v-on:click="handle(1,item.comments_id,index)">顶&nbsp;<span class="ding">[@{{item.likes_count}}]</span></a>
                                    <a href="javascript:void(0);"  v-on:click="handle(0,item.comments_id,index)" class="pd-l-10">踩&nbsp;<span class="cai">[@{{item.dislike_count}}]</span></a>
                                    <!-- <a href="javascript:void(0);"  v-on:click="showreplay()" class="pd-l-10">评论数&nbsp;<span class="cai">[0]</span></a> -->
                                    <a class="pd-l-10 replay" v-on:click="replay($event,index)" data-handle="1" data-uid="item.user_id" data-pid="item.comments_id" data-level = "item.level" data-tid="item.top_id">
                                    评论数&nbsp;<span class="cai">[@{{item.commnets_count}}]</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment none">
                            <div class="commentitem row" v-for="(val,i) in item.replaylist">
                                <div class="col-md-offset-1 col-md-1 head-img"><img src="{{asset('images/news/m_1.png')}}" class="img-circle"></div>
                                    <div class="col-md-10">
                                       <div class="col-md-10">
                                            <p><span class="user-name">@{{val.user_name}}</span><span class="pd-l-20"><!-- [来自哪颗星系] --></span></p>
                                        </div>
                                        <div class="col-md-2 t-r">
                                            @{{val.created_at}}
                                        </div>
                                        <div class="col-md-12">
                                            @{{val.content}}
                                        </div>
                                    </div>
                            </div>
                            <div class="row t-r replay">
                                <div class="col-md-offset-1 col-md-1 head-img"><img src="{{asset('images/news/m_1.png')}}" class="img-circle"></div>
                                <div class="col-md-10 t-r">
                                    <textarea class="news-ipt" rows="2" width="50%"  v-model="replaydata.content"></textarea>
                                    <p class="t-r">
                                        <button v-on:click="doreplay(index)">确认回复</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                   <!--  <div id="tpl_replay" class="row t-r none">
                        <div class="col-md-3 head-img"><img src="{{asset('images/news/m_1.png')}}" class="img-circle"></div>
                        <div class="col-md-8 t-r">
                            <textarea class="news-ipt" rows="3" width="80%">@{{replaydata.content}}</textarea>
                            <p class="t-r">
                                <button v-on:click="doreplay()">确认回复</button>
                            </p>
                        </div>
                    </div> -->
                </div>
         </div>
         </div>
    </section>

@endsection
@section('javascript')
    @parent
    <script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
    <script type="text/javascript" src="{{asset('web/js/comments.js')}}"></script>
@endsection