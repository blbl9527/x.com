<!DOCTYPE html>
<html>
<head>
<title>x-家政系统 | 修改个人信息</title>
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
                      <li><a href="{{url('login/logout')}}">退出登录</a></li>
                  </ul>
              </li>

              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      我<span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li><a href="{{env('site').'/other/modifycme'}}">变更信息</a></li>
                      <li><a href="{{env('site').'/other/modifycpw'}}">修改密码</a></li>
                  </ul>
              </li>

              <li><a href="#">家政新闻</a></li>

              <li><a href="{{env('site').'/sitecomment'}}">网站留言</a></li>
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
            <div class="alert alert-success">您正在修改您的个人信息</div>
            <form class="form-horizontal" role="form">
               <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">姓名</label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control" id="name" readonly
                        placeholder="请输入您的姓名">
                  </div>
               </div>

                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">姓别</label>
                    <label class="checkbox-inline">
                      <input type="radio" name="gender" id="optionsRadios3" readonly
                         value="male"> 男士
                    </label>
                    <label class="checkbox-inline">
                      <input type="radio" name="gender" id="optionsRadios4" readonly
                         value="female" checked> 女士
                    </label>
                </div>

               <div class="form-group">
                  <label for="username" class="col-sm-3 control-label">用户名</label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control" id="username" readonly
                        placeholder="请输入用户名">
                  </div>
               </div>
               
               <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">email</label>
                  <div class="col-sm-6">
                     <input type="email" class="form-control" id="email"
                        placeholder="请输入邮件地址">
                  </div>
               </div>
               <div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">电话</label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control" id="phone"
                        placeholder="请输入您的电话">
                  </div>
               </div>
              <div class="form-group">
                  <label for="aboutme" class="col-sm-3 control-label">关于我</label>
                  <div class="col-sm-6">
                     <textarea name="aboutme" class="form-control" rows="3">学历、等个人信息</textarea>
                  </div>   
              </div>
                
                <div class="form-group">
                    <label for="privateprotected" class="col-sm-3 control-label">隐私保护</label>
                    <label class="checkbox-inline">
                      <input type="radio" name="privatep" id="optionsRadios3"
                         value="open"> 公开联系方式
                    </label>
                    <label class="checkbox-inline">
                      <input type="radio" name="privatep" id="optionsRadios4"
                         value="close" checked> 不公开联系方式
                    </label>
                </div>
                
               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6">
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