<!DOCTYPE html>
<html>
<head>
<title>x-家政 | 添加家政新闻</title>
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


    @if(isset($msg))
      <div class="alert alert-danger">{{$msg}}</div>
    @else
      <div class="alert alert-danger">管理员您好，您正在添加家政新闻</div>
    @endif


    <div class="row"> <!-- 中 -->
        <div class="col-xs-8">
            <form class="form-horizontal" role="form">
                
               <div class="form-group">
                  <label for="workitem" class="col-sm-2 control-label">文章标题：</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" id="workitem" required
                        placeholder="请输入文章标题">
                  </div>
               </div>

               <div class="form-group">
                  <label for="workitem" class="col-sm-2 control-label">文章编辑：</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" id="workitem" required
                        placeholder="请输入文章编辑者">
                  </div>
               </div>

               <div class="form-group">
                  <label for="workitem" class="col-sm-2 control-label">文章描述：</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" id="workitem" required
                        placeholder="请输入文章描述">
                  </div>
               </div>

               <div class="form-group">
                  <label for="workitem" class="col-sm-2 control-label">文章内容：</label>
                  <div class="col-sm-9">
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/ueditor.all.min.js')}}"> </script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                    <script id="editor" name="art_content" type="text/plain" style="width:860px;height:500px;"></script>
                    <script type="text/javascript">
                        var ue = UE.getEditor('editor');
                    </script>
                  </div>
               </div>

               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-9">
                     <button type="submit" class="btn btn-default">发表文章</button>
                  </div>
               </div>
            </form> 
        </div> <!--  end of col-xs-8  -->

</div>
    </div>
</div>

</body>
</html>