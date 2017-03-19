<!DOCTYPE html>
<html>
<head>
<title>x-家政 | 更改时间类型</title>
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
                    <li><a href="{{url('work/create')}}">工作类型</a></li>
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

        @if(isset($msg))
            <div class="alert alert-danger">{{$msg}}</div>
        @else
            <div class="alert alert-danger">管理员您好，下面是本站所有的时间类型</div>
        @endif


          <table class="table table-bordered">
             <thead>
                <tr>
                   <th>工作类型ID</th>
                   <th>描述</th>
                </tr>
             </thead>
             <tbody>
                <tr>
                   <td>1</td>
                   <td>工作日</td>
                </tr>
                <tr>
                   <td>2</td>
                   <td>休息日</td>
                </tr>
                <tr>
                   <td>3</td>
                   <td>周一</td>
                </tr>
             </tbody>
          </table>


<div class="alert alert-danger">请参考上表，进行相关修改</div>
<form class="form-horizontal" role="form">
    
    <div class="form-group">
        <label for="areaid" class="col-sm-2 control-label">选择类型ID</label>
          <div class="col-sm-8">
              <select name="areaid" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
              </select>
          </div>
    </div>

    <div class="form-group">
        <label for="workitem" class="col-sm-2 control-label">更改描述</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="workitem" required
                    placeholder="请重新定义时间类型描述">
            </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-default">确定修改</button>
        </div>
    </div>

</form> 

        </div> <!-- col -->
    </div> <!-- row -->
</div> <!-- container -->

</body>
</html>