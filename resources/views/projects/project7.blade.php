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
                            <p>这个项目的整体框架使用了laravel + vue来完成，环境为nginx+mysql+php,在该项目中我们将项目进行分层，分为了控制器层，服务层，和操作层，控制器层作为入口进入不同的服务层，服务层内包含各种方法进入不同的操作层，基本上做到了层级分明，代码不混乱的尝试。</p>
         
        <p> 该项目需要实现的功能包括，创建基础学员班级模板信息，基础配置信息，用户信息，课程分为小班课，学前班，幼儿园，还有竞赛这四种，主要模块包括，学员管理，用户管理，班级管理，教师管理，校区管理，优惠管理，竞赛管理，代收费管理，财务管理，基础配置，权限设置等部分，开发周期较长，我是中途加入，参与开发了幼儿园，和学前班模块。</p>
                         
                        </div><!--//content-->
                    </div><!--//section-inner-->                 
                </section><!--//section-->
    
               <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Projects Introduction</h2>
                        <div class="content">    
                                               
                            <div class="item featured text-center">
                                <h3 class="title"><a href="http://bete701.youcaiedu.com/" target="_blank">优才教育平台开发(该项目地址为测试地址)</a></h3>
                                <p class="summary">基于laravel的教育类项目</p>
                                <div class="featured-image">
                                    <a href="http://bete701.youcaiedu.com/" target="_blank">
                                    <img class="img-responsive project-image" src="{{ asset('images/youcai.jpeg') }}" alt="project name" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                        </div>
                                    </div>
                                    
                                <div class="desc text-left">
                                    <p>本项目采用了接口式开发，前端使用vue，后端使用laravel,代码均放在公司自己搭建的gitlab上，该项目相对较大，涉及到的东西也很多，采用了层级分离的方式以后，对我们的开发起到了很大的作用。</p>
                                    <p>该项目由于分类众多，使用了大概300张数据表来实现后台逻辑存储，在这个项目当中我学到了包括表格，短信，passport，依赖注入，模型观测者等相关知识，软知识方面包括，在开发某一功能前，一定要和产品进行沟通，
                                    彻底理解客户的需求，按照需求开发项目，对于rp不合理的地方也要及时提出，不然可能推挤很多问题，导致后期很难修改。</p>
                                </div><!--//desc-->
                                <img class="img-responsive project-image" src="{{ asset('images/youcai1.jpeg') }}" alt="project name" />

                                <a class="btn btn-cta-secondary" href="http://bete701.youcaiedu.com/" target="_blank"><i class="fa fa-thumbs-o-up"></i> 前往</a>
                            </div><!--//item-->

                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->

                
                <section class="projects section">
                    <div class="section-inner">
                        <h2 class="heading">Other Projects</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><a href="{{ route('pages',2) }}">微推广平台</a></h3>
                                <p class="summary">本项目我负责维护和增加新功能，本项目同样分为前台后后台部分，前台用户根据不同的权限可以获得不同的发表广告数量，使用天数等，用户数据后台代理均可显示，功能很强大。</p>
                                <p><a class="more-link" href="#website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="{{ route('pages',3) }}">08cms下的旺屋</a> <span class="label label-theme">旺屋</span></h3>
                                <p class="summary">本网站我负责管理后台部分和增加新的页面，在这个过程当中熟悉了这个框架，这个框架当中有标记来控制网站识别页面，路由功能，结构比起微擎可以说清晰很多。</p>
                                <p><a class="more-link" href="#website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><a href="{{ route('pages',4) }}">100好房（微擎）</a> <span class="label label-theme">微擎</span></h3>
                                <p class="summary">在本项目当中我们采取团队协作的模式共同开发了职业经纪人应用，可以实现的功能包括，经纪人添加楼盘，经纪人详情，项目跟进，报备，经纪人薪酬，发展新的经纪人，经纪人团队等各类功能，本项目路由复杂，相对较为生疏，我负责写部分功能。</p>
                                <p><a class="more-link" href="#website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> View on GitHub</a></p>
                            </div><!--//item-->
                            
                            <a class="btn btn-cta-secondary" href="#">More on CoderWall <i class="fa fa-chevron-right"></i></a>
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">软件工程师 <span class="place"><a href="#">青岛一零二四科技有限公司</a></span> <span class="year">(2016 - 2017)</span></h3>
                                <p>在该公司我主要负责项目开发，架构设计，开发语言为php，开发环境多变根据客户服务器不同而不同，使用框架为thinkphp和laravel，利用svn+git来实现团队协作，熟悉lanmp以及wamp的环境部署。</p>
                            </div><!--//item-->
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
                                    主要接触开发了包括 支付，passport认证，crontab命令，邮件，短信，授权登录，队列，权限等各方面内容，认识到了一个项目从开发到完成前期规划和准备具有很关键的作用，是否真正理解了某些功能是开发出这些功能的基准。

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

                
                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Education</h2>
                        <div class="content">
                            <div class="item">                      
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> 电子信息科学与技术</h3>
                                <h4 class="university">潍坊科技学院 <span class="year">(2013-2017)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> 整站建设</h3>
                                <h4 class="university"> 兄弟连视屏 <span class="year">(2014-2016)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                            


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



