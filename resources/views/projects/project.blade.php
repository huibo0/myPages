@include('layout.header')
<!-- ******HEADER****** -->
@include('layout.top')



    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">About Project</h2>
                        <div class="content">
                            <p>{!! $show->describe !!}</p>
                            {{--<p>这个项目的整体框架使用了laravel，开发环境为linux+mysql+php,项目当中使用的技术包括html+css+js+php+ajax，项目采用mvc架构，逻辑非常清晰，本项目当中我们使用了码云平台，利用git技术来进行团队合作开发。</p>--}}

        {{--<p> 该项目为企业官方网站，分为前台和后台管理两部分，该网站数据基本全部从后台通过数据库取出，包括轮涡图、三级菜单、合作伙伴、可承接业务等，后台实现模块的增删改查，全局搜索，上传等功能，关于功能实现部分会在下文当中进行一部分详细介绍。</p>--}}

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

               <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Projects Introduction</h2>
                        <div class="content">

                            <div class="item featured text-center">
                                <h3 class="title"><a href="http://360.lami360.com" target="_blank">{{$show->title}}</a></h3>
                                <p class="summary">基于艺术框架的实用型项目</p>
                                <div class="featured-image">
                                    <a href="http://360.lami360.com" target="_blank">
                                    <img class="img-responsive project-image" src="{{ $show->subImage_1 }}" alt="project name" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                        </div>
                                    </div>

                                <div class="desc text-left">
                                    <p>{!! $show->content !!}</p>
                                </div><!--//desc-->
                                <img class="img-responsive project-image" src="{{ $show->subImage_2 }}" alt="project name" />

                                <a class="btn btn-cta-secondary" href={{$show->url}} target="_blank"><i class="fa fa-thumbs-o-up"></i> 前往</a>
                            </div><!--//item-->


                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->


                <section class="projects section">
                    <div class="section-inner">
                        <h2 class="heading">Other Projects</h2>
                        <div class="content">
                            @foreach($list as $value)

                            <div class="item">
                                <h3 class="title"><a href="{{ route('pages', $value->id) }}">{{$value->title}}</a></h3>
                                <p class="summary">{{$value->subDescribe}}</p>
                                <p><a class="more-link" href="{{ route('pages', $value->id) }}" target="_blank"><i class="fa fa-external-link"></i> 查看详情</a></p>
                            </div><!--//item-->
                            @endforeach
                            {{--<div class="item">--}}
                                {{--<h3 class="title"><a href="{{ route('pages',3) }}">08cms下的旺屋</a> <span class="label label-theme">旺屋</span></h3>--}}
                                {{--<p class="summary">本网站我负责管理后台部分和增加新的页面，在这个过程当中熟悉了这个框架，这个框架当中有标记来控制网站识别页面，路由功能，结构比起微擎可以说清晰很多。</p>--}}
                                {{--<p><a class="more-link" href="#website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a></p>--}}
                            {{--</div><!--//item-->--}}
                            {{--<div class="item">--}}
                                {{--<h3 class="title"><a href="{{ route('pages',4) }}">100好房（微擎）</a> <span class="label label-theme">微擎</span></h3>--}}
                                {{--<p class="summary">在本项目当中我们采取团队协作的模式共同开发了职业经纪人应用，可以实现的功能包括，经纪人添加楼盘，经纪人详情，项目跟进，报备，经纪人薪酬，发展新的经纪人，经纪人团队等各类功能，本项目路由复杂，相对较为生疏，我负责写部分功能。</p>--}}
                                {{--<p><a class="more-link" href="#website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a></p>--}}
                            {{--</div><!--//item-->--}}

                            <a class="btn btn-cta-secondary" href="#">More on CoderWall <i class="fa fa-chevron-right"></i></a>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">软件工程师 - <span class="place"><a href="#">山东拉米网络科技有限公司</a></span> <span class="year">(2017 - 2017.3)</span></h3>
                                <p>在该公司我的工作以二次开发和服务器维护为主，二次开发的范围包括微信的微擎框架，08cms的门户框架，原生的PHP代码，laravel框架，二开的功能包括经纪人邀请码生成，身份验证，广告软件的用户分级，发布限制，以及嫁编辑器包括keditor等等
                                ，在这个过程当中我熟悉了很多的框架，扩展了视野，服务器维护主要负责公司服务器维护功能，公司服务器有两个，环境一个是windows server2008 一个是windowserver 2012，2018使用的环境和2012不同为iis+mysql+php5.6，我负责维护网站应用池、对网站环境配置、建立ftp连接、建立数据库、测试网站环境，2012使用的phpstuday，环境为apache+mysql+php7.0管理方便。本站点使用的是cents os，环境为自己搭建。
                                </p>
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="title">软件工程师 - <span class="place"><a href="#">杭州燊蓝科技有限公司</a></span> <span class="year">(2017.3 - 2018.5)</span></h3>
                                <p>
                                    该公司因深蓝阅读而出名，很荣幸可以加入他们，在该公司，我接触了包括餐饮类项目（尚可味），教育类项目（优才教育），拍卖类项目（虎拍），这三个项目均是使用laravel框架完成，开发方式除了虎拍 后台是我独立完成以外，其他均是前后端配合，用接口式的方式来完成。
                                    主要接触开发了包括 支付，passport认证，crontab命令，邮件，短信，授权登录，监听事件，队列，权限等各方面内容，认识到了一个项目从开发到完成前期规划和准备具有很关键的作用，是否真正理解了某些功能是开发出这些功能的基准。

                                </p>
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="title">软件工程师 - <span class="place"><a href="#">乐偶(杭州)网络科技有限公司-贰贰网络分公司</a></span> <span class="year">(2018.5 - 至今)</span></h3>
                                <p>
                                    面试的时候进去的是贰贰网络，入职以后几个月，公司要分出去做一个专门的项目，就是现在的乐偶营销云，该项目是一个数字化自媒体营销的项目，公司投入了很多的人力去做，现在也已经上线，
                                    更名为乐偶云，我在该公司参与了，官网建站部分功能，乐偶云全部功能，学习了解了相关的设计模式，设计理念，代码调优，数据库优化，主从，用户体系的构建，并用python写过几个爬虫，去获取各个自媒体的数据，
                                    对python有了一定的了解，并自己写了12306买票脚本，对代码有了新的认识，也更多了学习了更底层的东西。

                                </p>
                            </div><!--//item-->


                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Shandong Weifang</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">huibo@huibo.cn</a></li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://www.ihuibo.cn</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//aside-->

                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                           <!-- <p class="intro">
                                Intro about your skills goes here. Keep the list lean and only show your primary skillset. You can always provide a link to your Linkedin or Coderwall profile so people can get more info there.</p>
                            -->
                            <div class="skillset">

                                <div class="item">
                                    <h3 class="level-title">Html<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to add more info...">Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="60%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Js &amp; jQuery<span class="level-label">Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="70%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">CSS<span class="level-label">Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="70%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Php<span class="level-label">Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Python<span class="level-label">Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="50%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Coderwall</a></p>
                            </div>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <!--   <aside class="testimonials aside section">
                       <div class="section-inner">
                           <h2 class="heading">Testimonials</h2>
                           <div class="content">
                               <div class="item">
                                   <blockquote class="quote">
                                       <p><i class="fa fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                   </blockquote>
                                   <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>
                               </div><!--//item-->

                        <!--    <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a></p>

                        </div><!--//content-->
          <!--          </div><!--//section-inner-->
          <!--      </aside><!--//section-->


                {{--<aside class="education aside section">--}}
                    {{--<div class="section-inner">--}}
                        {{--<h2 class="heading">Education</h2>--}}
                        {{--<div class="content">--}}
                            {{--<div class="item">--}}
                                {{--<h3 class="title"><i class="fa fa-graduation-cap"></i> 电子信息科学与技术</h3>--}}
                                {{--<h4 class="university">潍坊科技学院 <span class="year">(2013-2017)</span></h4>--}}
                            {{--</div><!--//item-->--}}
                            {{--<div class="item">--}}
                                {{--<h3 class="title"><i class="fa fa-graduation-cap"></i> 整站建设</h3>--}}
                                {{--<h4 class="university"> 兄弟连视屏 <span class="year">(2014-2016)</span></h4>--}}
                            {{--</div><!--//item-->--}}
                        {{--</div><!--//content-->--}}
                    {{--</div><!--//section-inner-->--}}
                {{--</aside><!--//section-->--}}



     <!--
                <aside class="list music aside section">
                    <div class="section-inner">
                        <h2 class="heading">Favourite coding music</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Ut sollicitudin in mauris non auctor</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Etiam hendrerit urna nunc</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="#">Duis et felis bibendum</a></li>
                            </ul>
                        </div><!--//content-->
          <!--          </div><!--//section-inner-->
            <!--    </aside><!--//section-->





            </div><!--//secondary-->
        </div><!--//row-->
    </div><!--//masonry-->

    <!-- ******FOOTER****** -->
@section('footer')
    @extends('layout.footer')
@endsection



