<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>X-家政中介 | 评论</title>
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
      <script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target="#myScrollspy">
<div class="container">

    

<div class="row">
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
        <h5>X-家政中介管理系统</h5>
	</div>


    <div class="row">

        <div class="col-xs-3">
            <div class="alert alert-success"><p>本系统的建立初衷是为家政从业人员提供一个求职的去处，虽然类似的平台有很多，但是或多或少都存在这样那样的问题。本系统主要是从业人员发布求职的地方，对于招聘的功能，可能长期不会开发，因为有太多居心不良的人总是借着各种各样的手段进行诈骗，为什么要欺负那些善良的人？</p></div>
            <div class="alert alert-success">
            <p>虽然本系统可能会很久不会开放招聘的功能，但是并不影响招聘者来这里选择合适的雇佣为您所用，在这里您不用担心漫天飞的广告，这里不会有广告。</p></div>
            <div class="alert alert-success">
            <p>本站不会以任何形式收取人和费用，望各位求职者在享受互联网的便捷的同事也要提高自己的警惕，防止被骗。</p></div>
            <div class="alert alert-info">本站建立并不容易，欢迎各种形式<a href="">打赏<a/>，金额不限！</div>
        </div>

        <div class="col-xs-9">
			<div class="alert alert-info">您将为以下工作信息添加一条评论：</div>
			<table class="table table-hover table-bordered">
			   <thead>
			      <tr>
			      	<th>工作ID</th>
			        <th>雇主</th>
			        <th>工作类型</th>
			        <th>时间安排</th>
			        <th>日薪</th>
			        <th>地区</th>
			      </tr>
			   </thead>
			   <tbody>
			      <tr>
			      	<th>1</th>
			        <td>罗浩楠</td>
			        <td>带小孩</td>
			        <td>工作日</td>
			        <td>200</td>
			        <td>信阳</td>
			      </tr>
			   </tbody>
			</table>
			<div class="alert alert-info">请在下面的表单填写您的评论，但是还望您客观公正的评价，维护良好的秩序！</div>
			<form class="form-horizontal" role="form">

               <div class="form-group">
                  <label for="aboutme" class="col-sm-3 control-label">评论：</label>
                  <div class="col-sm-9">
                     <textarea name="aboutme" class="form-control" rows="6">好评！~</textarea>
                  </div>
              </div>

               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-3">
                     <button type="submit" class="btn btn-default">发表评论</button>
                  </div>
               </div>
            </form>

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

</div>
</body>
</html>  