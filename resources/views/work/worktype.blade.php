<!DOCTYPE html>
<html>
<head>
<title>x-家政系统 | *相关</title>
  <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
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
            <div class="alert alert-success"><p>本系统的建立初衷是为家政从业人员提供一个求职的去处，虽然类似的平台有很多，但是或多或少都存在这样那样的问题。本系统主要是从业人员发布求职的地方，对于招聘的功能，可能长期不会开发，因为有太多居心不良的人总是借着各种各样的手段进行诈骗，为什么要欺负那些善良的人？</p></div>
            <div class="alert alert-success">
            <p>虽然本系统可能会很久不会开放招聘的功能，但是并不影响招聘者来这里选择合适的雇佣为您所用，在这里您不用担心漫天飞的广告，这里不会有广告。</p></div>
            <div class="alert alert-success">
            <p>本站不会以任何形式收取人和费用，望各位求职者在享受互联网的便捷的同事也要提高自己的警惕，防止被骗。</p></div>
            <div class="alert alert-info">本站建立并不容易，欢迎各种形式<a href="">打赏<a/>，金额不限！</div>
        </div>
        <div class="col-xs-8">
            <h3>{{$type}} 相关的工作有</h3>
                <table class="table table-bordered table-hover">
                   <thead>
                      <tr>
                         <th>ID</th>
                         <th>姓名</th>
                         <th>工作类型</th>
                         <th>时间安排</th>
                         <th>日薪</th>
                         <th>地区</th>
                         <th>选ta?</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td>1</td>
                         <th>李坤</th>
                         <td>带小孩</td>
                         <td>工作日</td>
                         <td>200</td>
                         <td>信阳</td>
                         <td>选ta?</td>
                      </tr>
                      <tr>
                         <td>2</td>
                         <th>李坤</th>
                         <td>带小孩</td>
                         <td>工作日</td>
                         <td>200</td>
                         <td>信阳</td>
                         <td>选ta?</td>
                      </tr>
                   </tbody>
                </table>  
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