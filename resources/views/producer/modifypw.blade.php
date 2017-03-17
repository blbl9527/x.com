<!DOCTYPE html>
<html>
<head>
<title>x-家政系统 | 修改密码</title>
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
                      <li class="disabled"><a href="{{route('producer.create')}}">注册家政服务者</a></li>
                      <li class="disabled"><a href="{{route('consumer.create')}}">注册家政消费者</a></li>
                      <li class="divider"></li>
                      <li class="disabled"><a href="{{env('site').'/login/start'}}">登录系统</a></li>
                      <li><a href="#">退出登录</a></li>
                  </ul>
              </li>

              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      我<span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a href="{{env('site').'/other/modifypme'}}">变更信息</a></li>
                      <li><a href="{{env('site').'/other/modifyppw'}}">修改密码</a></li>
                      <li><a href="{{env('site').'/other/pcreate'}}">寻找工作</a></li>
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
            <div class="alert alert-info"><p>请妥善管理你的密码，如有遗失请联系管理员</p></div>
            <div class="alert alert-info"><p>如果您有好的意见或建议可以告诉管理员，或者在留言板块给我们留言</p></div>
            <div class="alert alert-info"><p>本站不会以任何形式收取人和费用，望各位求职者在享受互联网的便捷的同事也要提高自己的警惕，防止被骗。</p></div>
            <div class="alert alert-info">本站建立并不容易，欢迎各种形式<a href="">打赏<a/>，金额不限！</div>
        </div>
        <div class="col-xs-8">
            <form class="form-horizontal" role="form">
                @if(isset($msg))
                  <div class="alert alert-danger">{{$msg}}</div>
                @else
                  <div class="alert alert-danger">您正在修改您的密码</div>
                @endif
               <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">原密码</label>
                  <div class="col-sm-9">
                     <input type="password" class="form-control" id="password" required
                        placeholder="请输入原密码">
                  </div>
               </div>
               <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">新密码</label>
                  <div class="col-sm-9">
                     <input type="password" class="form-control" id="password" required
                        placeholder="请输入密码">
                  </div>
               </div>
               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-9">
                     <button type="submit" class="btn btn-default">确定修改</button>
                  </div>
               </div>
            </form> 
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