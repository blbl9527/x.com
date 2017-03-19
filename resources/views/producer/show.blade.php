<!DOCTYPE html> <!-- this page for consumer, so it's header is consumer-like! -->
<html>
<head>
    <meta charset="UTF-8">
    <title>X-家政中介 | {{$data['name']}}的资料</title>
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
                      <li><a href="{{env('site').'/other/modifycme'}}">变更信息</a></li>
                      <li><a href="{{env('site').'/other/modifycpw'}}">修改密码</a></li>
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

        <div class="col-xs-3" id="myScrollspy">
            <div class="alert alert-success"><p>本系统的建立初衷是为家政从业人员提供一个求职的去处，虽然类似的平台有很多，但是或多或少都存在这样那样的问题。本系统主要是从业人员发布求职的地方，对于招聘的功能，可能长期不会开发，因为有太多居心不良的人总是借着各种各样的手段进行诈骗，为什么要欺负那些善良的人？</p></div>
            <div class="alert alert-success">
            <p>虽然本系统可能会很久不会开放招聘的功能，但是并不影响招聘者来这里选择合适的雇佣为您所用，在这里您不用担心漫天飞的广告，这里不会有广告。</p></div>
            <div class="alert alert-success">
            <p>本站不会以任何形式收取人和费用，望各位求职者在享受互联网的便捷的同事也要提高自己的警惕，防止被骗。</p></div>
            <div class="alert alert-info">本站建立并不容易，欢迎各种形式<a href="">打赏<a/>，金额不限！</div>
        </div>

        <div class="col-xs-9">
           <div class="alert alert-success ">您正在查看 服务提供者 {{$data['name']}} 的信息</div>
			<form class="form-horizontal" role="form">
               <div class="form-group">
                  <label for="name" class="col-sm-3 control-label">姓名</label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control" id="name" readonly
                        value="{{$data['name']}}">
                  </div>
               </div>

                <div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">姓别</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" id="name" readonly
                        value="{{$data['gender']}}">
                  	</div>
                </div>

               <div class="form-group">
                  <label for="username" class="col-sm-3 control-label">用户名</label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control" id="username" readonly
                        value="{{$data['username']}}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">email</label>
                  <div class="col-sm-6">
                     <input type="email" class="form-control" id="email" readonly
                       value="{{$data['email']}}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">电话</label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control" id="phone" readonly
                        value="{{$data['phone']}}">
                  </div>
               </div>
               <div class="form-group">
                  <label for="aboutme" class="col-sm-3 control-label">关于我</label>
                  <div class="col-sm-6" readonly>
                     <textarea name="aboutme" class="form-control" rows="3">{{$data['about']}}</textarea>
                  </div>
              </div> 
            </form>   

            <div class="alert alert-success">下面是对于 服务提供者 {{$data['name']}} 的评价</div>
            <table class="table table-bordered  table-hover">
			   <tbody>
			      @foreach($data['comments'] as $item)
            <tr>
               <td>{{$item->description}}</td>  
            </tr>
           @endforeach
			   </tbody>
			</table>

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