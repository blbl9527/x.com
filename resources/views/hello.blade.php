<!DOCTYPE html>
<html>
<head>
<title>x-家政系统 | HOME</title>
  <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://libs.baidu.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row"> <!-- 头 -->

        <div class="col-xs-12">
          <ul class="nav nav-pills nav-justified">
            <li><a href="{{env('site')}}">主页</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  账号<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('producer.create')}}">注册家政服务者</a></li>
                    <li><a href="{{route('consumer.create')}}">注册家政消费者</a></li>
                    <li class="divider"></li>
                    <li><a href="{{env('site').'/login/start'}}">登录系统</a></li>
                    <li class="disabled"><a href="#">退出登录</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    关键词<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">带孩子</a></li>
                    <li><a href="#">做饭</a></li>
                    <li><a href="#">钟点</a></li>
                    <li><a href="#">搬家</a></li>
                    <li><a href="#">游戏代练</a></li> 
                </ul>
            </li>

            <li><a href="#">家政新闻</a></li>

            <li><a href="{{env('site').'/other/sitecomment'}}">网站留言</a></li>
   
        </ul>
        </div>

    </div>

    <div class="jumbotron">
        <p>x 家政中介管理系统</p>
    </div>

    <div class="row"> <!-- 中 -->
        <div class="col-xs-4">
            
            <div class="alert alert-success"><h4>公告:</h4><p>本系统的建立初衷是为家政从业人员提供一个求职的去处，虽然类似的平台有很多，但是或多或少都存在这样那样的问题。本系统主要是从业人员发布求职的地方，对于招聘的功能，可能长期不会开发，因为有太多居心不良的人总是借着各种各样的手段进行诈骗，为什么要欺负那些善良的人？</p>
            </div>
            
            <div class="alert alert-success"><h4>家政新闻:</h4>
            <p>虽然本系统可能会很久不会开放招聘的功能，但是并不影响招聘者来这里选择合适的雇佣为您所用，在这里您不用担心漫天飞的广告，这里不会有广告。</p>
            </div>
            
            <div class="alert alert-success"><h4>每日寄语:</h4>
            <p>本站不会以任何形式收取人和费用，望各位求职者在享受互联网的便捷的同事也要提高自己的警惕，防止被骗。</p>
            </div>
            
            <div class="alert alert-info"><h4>站长有话说:</h4>本站建立并不容易，欢迎各种形式<a href="">打赏<a/>，金额不限！
            </div>
        </div>

        <div class="col-xs-8">

            <div id="myCarousel" class="carousel slide">
               <!-- 轮播（Carousel）指标 -->
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>  
               <!-- 轮播（Carousel）项目 -->
               <div class="carousel-inner">
                  <div class="item active">
                     <img src="{{asset('imgs/1.jpg')}}" alt="First slide">
                     <div class="carousel-caption">标题 1</div>
                  </div>
                  <div class="item">
                     <img src="{{asset('imgs/2.jpg')}}" alt="Second slide">
                     <div class="carousel-caption">标题 2</div>
                  </div>
                  <div class="item">
                     <img src="{{asset('imgs/3.jpg')}}" alt="Third slide">
                     <div class="carousel-caption">标题 3</div>
                  </div>
               </div>
               <!-- 轮播（Carousel）导航 -->
               <a class="carousel-control left" href="#myCarousel"
                  data-slide="prev">&lsaquo;</a>
               <a class="carousel-control right" href="#myCarousel"
                  data-slide="next">&rsaquo;</a>
            </div>

        </div>
    </div>
    <div class="row"> <!-- 尾 -->
        <div class="col-xs-12">
            <div class="jumbotron">
                <p>版权开放<br/>
                  <a href="" target="blank">管理员登录</a>

                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>