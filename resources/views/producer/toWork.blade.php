  <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>X-家政中介 | 去工作</title>
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

        <div class="col-xs-9">

            @if(isset($data['msg']))
            <div class="alert alert-success">{{$data['msg']}}</div>   
        	@endif 

	    <h4>工作详情</h4>
			<table class="table table-hover table-bordered">
				   <thead>
				      <tr>
				         <th>ID</th>
				         <th>雇主</th>
				         <th>工作类型</th>
				         <th>时间安排</th>
				         <th>日薪</th>
				         <th>地区</th>
				      </tr>
				   </thead>
				   <tbody>
				   
				      <tr>
				         <td>{{$data['id']}}</td>
				         <th><a href="{{$data['abtcurl']}}" target="blank">{{$data['cname']}}</a></th>
				         <td>{{$data['work']}}</td>
				         <td>{{$data['time']}}</td>
				         <td>{{$data['salary']}}</td>
				         <td>{{$data['area']}}</td>
				      </tr>
				   
				   </tbody>
			</table>   
			<br/><br/>      
           <h4>附加信息</h4>
            <div class="alert alert-info">{{$data['about']}}</div> 
            <br/>

           <h4>联系方式</h4>
            <div class="alert alert-info">
            	phone:  {{$data['phone']}}<br/>
            	email:  {{$data['email']}}<br/>
            </div> 
            <br/>

        <h4>我选择</h4>
        <div class="alert alert-info">
        <form action="{{route('service.update',[$data['id']])}}" method="POST">
            <input type="hidden" name="_method" value="PUT"/>
            <input type="text" name="status" value="3" hidden>
            <input type="text" name="id" value="{{$data['id']}}" hidden>
            <input type="text" name="b" value="b" hidden>
            <input type="submit" class="btn btn-primary" value="我要去工作">
       </form>
       <form action="{{url('/consumer')}}" method="GET">
          <input type="submit" class="btn btn-primary" value="要在等一等">
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

</div>
</body>
</html>  