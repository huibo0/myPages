<!DOCTYPE html>

<html>

<head>

    <title>Mr Robot</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- for-mobile-apps -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" media="screen"/>

    <meta name="keywords" content="Alice Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,

Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- //for-mobile-apps -->

    <!--fonts-->



    <!--//fonts-->

    <script src="{{ asset('js/jquery.min.js') }}"> </script>

    <!-- Bootstrap core JavaScript

    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->

    <!-- js -->

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <!-- js -->

    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>

    <!--/script-->

    <script type="text/javascript">

        jQuery(document).ready(function($) {

            $(".scroll").click(function(event){

                event.preventDefault();

                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);

            });

        });

    </script>

</head>

<body>

<!--header-->

<div id="home" class="header">

    <div class="header-top">

        <div class="container">

            <div class="header-right-text">

                <h3>Email Me:<i>huibo@ihuibo.cn</i></h3>

            </div>

            <div class="header-btn">

                <a href="#">管理</a>

            </div>

        </div>

        <div class="clearfix"> </div>

    </div>

    <div class="header-nav effect2">

        <div class="container">

            <div class="navigation">

                <nav class="navbar navbar-default">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                            <span class="sr-only">Toggle navigation</span>

                            <span class="icon-bar"> </span>

                            <span class="icon-bar"> </span>

                            <span class="icon-bar"> </span>

                        </button>

                    </div>

                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav">

                            <li class="active"><a class="scroll" href="#home">主页 <span class="sr-only">(current)</span></a></li>

                            <li><a class="scroll" href="#About">技能</a></li>

                            <li><a class="scroll" href="#Portfolio">项目展示</a></li>

                            <li><a href="project6.php">关于本站</a></li>

                            <li><a class="scroll" href="#Contact">联系我</a></li>

                        </ul>

                        <div class="clearfix"> </div>

                    </div><!-- /.navbar-collapse -->

                </nav>

            </div>

        </div>

    </div>

    <div class="clearfix"> </div>

</div>

<!-- script-for-menu -->

<script>

    $("span.menu").click(function(){

        $(".top-nav ul").slideToggle("slow" , function(){

        });

    });

</script>

<!-- script-for-menu -->

<div class="banner">

    <div class="container">

        <div class="grid__item color-9">

            <a class="link link--ilin" href="#"><span>Hui</span><span>Bo</span></a>

        </div>

        <p>要随波逐浪<span>不可随波逐流</span></p>

    </div>

</div>

<div class="content-part">

    <div class="body-pic">

        <div class="container">

            <img src="{{ asset('images/me.png') }}" />

        </div>

        <div class="body-pic-bottom">



        </div>



    </div>

    <div class="clearfix"> </div>

    <div id="About" class="skills">

        <div class="container">

            <div class="skills-info">

                <h3>技能</h3>

                <div class="study2">

                    <h4>Html</h4>

                    <div class="progress">

                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">

                            <span class="sr-only">40% Complete (success)</span>

                        </div>

                    </div>

                    <h4>Css</h4>

                    <div class="progress">

                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">

                            <span class="sr-only">30% Complete</span>

                        </div>

                    </div>

                    <h4>Js</h4>

                    <div class="progress">

                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">

                            <span class="sr-only">60% Complete (warning)</span>

                        </div>

                    </div>

                    <h4>Php</h4><h4>

                        <div class="progress">

                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 70%">

                                <span class="sr-only">80% Complete (danger)</span>

                            </div>

                        </div>

                    </h4>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="social-icon">

    <div class="container">

        <a href="http://wpa.qq.com/msgrd?v=3&uin=958162574&site=qq&menu=yes">

            <div class="facebook">

                <span class="icon1"> </span>

                <label><i>QQ</i> <br />958162574</label>

            </div>

        </a>

        <a href="mailto:huibo@ihuibo.cn">

            <div class="twitter">

                <span class="icon2"> </span>

                <label><i>Email</i> <br />huibo@ihuibo.cn</label>

            </div>

        </a>

        <a href="tel:18369620560">

            <div class="youtube">

                <span class="icon3"> </span>

                <label><i>github</i> <br />callme</label>

            </div>

        </a>

        <a href="http://www.linkedin.com/in/%E5%8D%9A-%E6%83%A0-b490b6142/">

            <div class="linkdin">

                <span class="icon4"> </span>

                <label><i>linkedin</i> <br />click me</label>

            </div>

        </a>

        <div class="clearfix"> </div>

    </div>

    <div class="clearfix"> </div>

</div>



<!--light-box-js -->

<script src="{{ asset('js/jquery.chocolat.js') }}"></script>

<link rel="stylesheet" href="{{ asset('css/chocolat.css') }}" type="text/css" media="screen" charset="utf-8" />

<!--light-box-files -->

<script type="text/javascript" charset="utf-8">

    $(function() {

        $('.moments-bottom a').Chocolat();

    });

</script>

<!--//end-gallery js-->

<div id="Portfolio"  class="portfolio">

    <div class="container">

        <h3>项目展示</h3>

        <div class="gallery-info">

            <div class="col-md-4 galry-grids ">

                <a class="b-link-stripe b-animate-go" href="project.php" target="_blank">

                    <img src="{{ asset('images/lami.png') }}" class="img-responsive" alt="">

                    <div class="b-wrapper">

							<span class="b-animate b-from-left    b-delay03 ">

								<img class="img-responsive" src="{{ asset('images/e.png') }}" alt=""/>

							</span>

                    </div>

                </a>

            </div>

            <div class="col-md-4 galry-grids">

                <a class="b-link-stripe b-animate-go" href="project2.php" target="_blank">

                    <img src="{{ asset('images/img1.png') }}" class="img-responsive" alt="">

                    <div class="b-wrapper">

							<span class="b-animate b-from-left b-delay03 ">

								<img class="img-responsive" src="{{ asset('images/e.png') }}" alt=""/>

							</span>

                    </div>

                </a>

            </div>

            <div class="col-md-4 galry-grids">

                <a class="b-link-stripe b-animate-go" href="project3.php" target="_blank">

                    <img src="{{ asset('images/wangwu.png') }}" class="img-responsive" alt="">

                    <div class="b-wrapper">

							<span class="b-animate b-from-left    b-delay03 ">

								<img class="img-responsive" src="{{ asset('images/e.png') }}" alt=""/>

							</span>

                    </div>

                </a>

            </div>

            <div class="col-md-4 galry-grids">

                <a class="b-link-stripe b-animate-go" href="project4.php" target="_blank">

                    <img src="{{ asset('images/100haofang.png') }}" class="img-responsive" alt="">

                    <div class="b-wrapper">

							<span class="b-animate b-from-left    b-delay03 ">

								<img class="img-responsive" src="{{ asset('images/e.png') }}" alt=""/>

							</span>

                    </div>

                </a>

            </div>

            <div class="col-md-4 galry-grids">

                <a class="b-link-stripe b-animate-go" href="#" target="_blank">

                    <img src="{{ asset('images/img13.jpg') }}" class="img-responsive" alt="">

                    <div class="b-wrapper">

							<span class="b-animate b-from-left    b-delay03 ">

								<img class="img-responsive" src="{{ asset('images/e.png') }}" alt=""/>

							</span>

                    </div>

                </a>

            </div>

            <div class="col-md-4 galry-grids">

                <a class="b-link-stripe b-animate-go" href="project6.php" target="_blank">

                    <img src="{{ asset('images/ihuibo.png') }}" class="img-responsive" alt="">

                    <div class="b-wrapper">

							<span class="b-animate b-from-left    b-delay03 ">

								<img class="img-responsive" src="images/e.png" alt=""/>

							</span>

                    </div>

                </a>

            </div>

            <div class="col-md-4 galry-grids moments-bottom">

                <a class="b-link-stripe b-animate-go" href="{{ asset('images/img15.jpg') }}">

                    <img src="{{ asset('images/img15.jpg') }}" class="img-responsive" alt="">

                    <div class="b-wrapper">

							<span class="b-animate b-from-left    b-delay03 ">

								<img class="img-responsive" src="{{ asset('images/e.png') }}" alt=""/>

							</span>

                    </div>

                </a>

            </div>

            <div class="col-md-4 galry-grids moments-bottom">

                <a class="b-link-stripe b-animate-go" href="{{ asset('images/img16.jpg') }}">

                    <img src="{{ asset('images/img16.jpg') }}" class="img-responsive" alt="">

                    <div class="b-wrapper">

							<span class="b-animate b-from-left    b-delay03 ">

								<img class="img-responsive" src="{{ asset('images/e.png') }}" alt=""/>

							</span>

                    </div>

                </a>

            </div>

            <div class="col-md-4 galry-grids moments-bottom">

                <a class="b-link-stripe b-animate-go" href="{{ asset('images/img17.jpg') }}" >

                    <img src="{{ asset('images/img17.jpg') }}" class="img-responsive" alt="">

                    <div class="b-wrapper">

							<span class="b-animate b-from-left    b-delay03 ">

								<img class="img-responsive" src="{{ asset('images/e.png') }}" alt=""/>

							</span>

                    </div>

                </a>

            </div>

            <div class="clearfix"> </div>

        </div>

    </div>

</div>

<div id="Contact" class="contact">

    <div class="container">

        <div class="content_middle_bottom">

            <h3 class="tz-title-3">联系我</h3>

            <h4>有了朋友，生活才显出它全部的价值；一个人活着是为了朋友；保持自己的生命的完整，不受时间侵蚀，也是为了朋友。</h4>

        </div>

        <div class="col-sm-8 grid_2">

            <h3>Say hello!</h3>

            <form>

                <input type="text"   class="text name"  onFocus="this.value = '惠博';" onBlur="if (this.value == '') {this.value = '新的';}">

                <input type="text" class="text email"  onFocus="this.value = 'huibo@ihuibo.cn';" onBlur="if (this.value == '') {this.value = 'Email';}">

                <textarea  class="message" onFocus="this.value= '欢迎您联系我';" onBlur="if (this.value == '欢迎您联系我') {this.value = 'Message';}">Message</textarea>

                <input type="submit" value="Send Message" onclick="imessage()">

            </form>

        </div>

        <div class="col-sm-4 map">

            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103344.96318068985!2d-83.9250825!3d35.9584634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885c162246ce42a9%3A0x7bea92dac4f534c5!2sKnoxville%2C+TN%2C+USA!5e0!3m2!1sen!2sin!4v1434174666221" frameborder="0" style="border:0"> </iframe>-->

        </div>

        <div class="clearfix"> </div>

    </div>

</div>

<div class="footer">

    <div class="copy">

        <p>Copyright © 2016 All Rights Reserved huibo 鲁ICP备17019603 </p>
        <p><a href="http://www.ihuibo.cn/" target="_blank">惠博</a></p>

    </div>

    <script type="text/javascript">

        var token = "{{csrf_token()}}";
        var _method = "POST";
        var name = $(".name").val();
        var email = $(".email").val();
        var message = $(".message").val();
        function imessage() {
           $.ajax({
               type : 'POST',
               url : 'messages',
               data: {
                   _token : token,
                   _method : _method,
                   name : name,
                   email : email,
                   message : message
               },
               success: function (data) {
                   alert(data);
                 console.log(1);
               }

           });
//            alert("提交成功");

        }

        $(document).ready(function() {

            /*

             var defaults = {

             containerID: 'toTop', // fading element id

             containerHoverID: 'toTopHover', // fading element hover id

             scrollSpeed: 1200,

             easingType: 'linear'

             };

             */



            $().UItoTop({ easingType: 'easeOutQuart' });



        });

    </script>

    <a href="#" id="toTop" style="display: block;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>

</div>

</body>

</html>