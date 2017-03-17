<!DOCTYPE html>
<html>
<head>
<title>x-家政系统 | 文章修改</title>
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
                    <li><a href="#">安全退出</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  家政新闻<span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('post.create')}}">新建新闻</a></li>
                    <li><a href="{{url('other/modifyposts')}}">新闻管理</a></li>
                </ul>
            </li>

            <li><a href="{{env('site').'/other/sitecomment'}}">网站留言</a></li>
   
        </ul>
        </div>

    </div>

    <div class="jumbotron">
        <p>x 家政中介管理系统</p>
    </div>

    @if(isset($msg))
      <div class="alert alert-danger">{{$msg}}</div>
    @else
      <div class="alert alert-danger">管理员您好，下面是本站新闻列表，安热度排序</div>
    @endif

    <div class="row"> <!-- 中 -->
        <div class="col-xs-8">
            <table class="table table-bordered table-hover">
               <thead>
                  <tr>
                     <th>文章ID</th>
                     <th>文章标题</th>
                     <th>文章编辑</th>
                     <th>修改文章</th>
                     <th>删除文章</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Tanmay</td>
                     <td>Bangalore</td>
                     <td>560001</td>
                     <td>560001</td>
                     <td>删除文章</td>
                  </tr>
                  <tr>
                     <td>Tanmay</td>
                     <td>Bangalore</td>
                     <td>560001</td>
                     <td>560001</td>
                     <td>删除文章</td>
                  </tr>
                  <tr>
                     <td>Tanmay</td>
                     <td>Bangalore</td>
                     <td>560001</td>
                     <td>560001</td>
                     <td>删除文章</td>
                  </tr>
               </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>