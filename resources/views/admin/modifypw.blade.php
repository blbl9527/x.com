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
                  新建<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('consumer.create')}}">工作类型</a></li>
                    <li><a href="{{route('consumer.create')}}">时间类型</a></li>
                    <li><a href="{{route('consumer.create')}}">友情链接</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    我<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{env('site').'/other/modifyapw'}}">修改密码</a></li>
                    <li><a href="{{url('login/logout')}}">安全退出</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  家政新闻<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('producer.create')}}">新建新闻</a></li>
                    <li><a href="{{route('consumer.create')}}">删除新闻</a></li>
                </ul>
            </li>

            <li><a href="{{env('site').'/other/sitecomment'}}">网站留言</a></li>
   
        </ul>
        </div>

    </div>

    <div class="jumbotron">
        <p>x 家政中介管理系统</p>
    </div>

    <div class="row"> <!-- 中 -->
        <div class="col-xs-8">
            <form class="form-horizontal" role="form">
                @if(isset($msg))
                  <div class="alert alert-danger">{{$msg}}</div>
                @else
                  <div class="alert alert-danger">管理员您好，您正在修改您的密码</div>
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
</div>

</body>
</html>