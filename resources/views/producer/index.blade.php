<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>X-家政中介 | *主页</title>
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
      <script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <style type="text/css">
          /* Custom Styles */
          ul.nav-tabs{
              width: 140px;
              margin-top: 20px;
              border-radius: 4px;
              border: 1px solid #ddd;
              box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
          }
          ul.nav-tabs li{
              margin: 0;
              border-top: 1px solid #ddd;
          }
          ul.nav-tabs li:first-child{
              border-top: none;
          }
          ul.nav-tabs li a{
              margin: 0;
              padding: 8px 16px;
              border-radius: 0;
          }
          ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
              color: #fff;
              background: #0088cc;
              border: 1px solid #0088cc;
          }
          ul.nav-tabs li:first-child a{
              border-radius: 4px 4px 0 0;
          }
          ul.nav-tabs li:last-child a{
              border-radius: 0 0 4px 4px;
          }
          ul.nav-tabs.affix{
              top: 30px; /* Set the top position of pinned element */
          }
      </style>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#myNav").affix({
            offset: {
                top: 125
            }
        });
    });
    </script>
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
        <h5>X-家政中介管理系统</h5>
	</div>


    <div class="row">

        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked" id="myNav">
                <li class="active"><a href="#section-1">选择我的</a></li>
                <li><a href="#section-2">服务中的</a></li>
                <li><a href="#section-3">刚发布的</a></li>
                <li><a href="#section-4">未评价的</a></li>
                <li><a href="#section-5">已完成的</a></li>
            </ul>
        </div>

        <div class="col-xs-9">
            <h2 id="section-1">选择我的</h2>
				<table class="table table-hover">
				   <thead>
				      <tr>
				         <th>雇主</th>
				         <th>工作类型</th>
				         <th>时间安排</th>
				         <th>日薪</th>
				         <th>地区</th>
				         <th>去工作</th>
				      </tr>
				   </thead>
				   <tbody>
				      <tr>
				         <td>罗浩楠</td>
				         <td>带小孩</td>
				         <td>工作日</td>
				         <td>200</td>
				         <td>信阳</td>
				         <td>去工作</td>
				      </tr>
				      <tr>
				         <td>罗浩楠</td>
				         <td>带小孩</td>
				         <td>工作日</td>
				         <td>200</td>
				         <td>信阳</td>
				         <td>去工作</td>
				      </tr>
				   </tbody>
				</table>
            
            <hr>
            <h2 id="section-2">服务中的</h2>
				<table class="table table-hover">
								   <thead>
								      <tr>
								         <th>雇主</th>
								         <th>工作类型</th>
								         <th>时间安排</th>
								         <th>日薪</th>
								         <th>地区</th>
								         <th>结束工作</th>
								      </tr>
								   </thead>
								   <tbody>
								      <tr>
								         <td>罗浩楠</td>
								         <td>带小孩</td>
								         <td>工作日</td>
								         <td>200</td>
								         <td>信阳</td>
								         <td>结束工作</td>
								      </tr>
								      <tr>
								         <td>罗浩楠</td>
								         <td>带小孩</td>
								         <td>工作日</td>
								         <td>200</td>
								         <td>信阳</td>
								         <td>结束工作</td>
								      </tr>
								   </tbody>
								</table>
            
            <hr>
            <h2 id="section-3">刚发布的</h2>
				<table class="table table-hover">
								   <thead>
								      <tr>
								         <th>ID</th>
								         <th>工作类型</th>
								         <th>时间安排</th>
								         <th>日薪</th>
								         <th>地区</th>
								         <th>删除</th>
								      </tr>
								   </thead>
								   <tbody>
								      <tr>
								         <td>1</td>
								         <td>带小孩</td>
								         <td>工作日</td>
								         <td>200</td>
								         <td>信阳</td>
								         <td>删除</td>
								      </tr>
								      <tr>
								         <td>2</td>
								         <td>带小孩</td>
								         <td>工作日</td>
								         <td>200</td>
								         <td>信阳</td>
								         <td>删除</td>
								      </tr>
								   </tbody>
								</table>         
            <hr>
            <h2 id="section-4">未评价的</h2>
				<table class="table table-hover">
								   <thead>
								      <tr>
								         <th>雇主</th>
								         <th>工作类型</th>
								         <th>时间安排</th>
								         <th>日薪</th>
								         <th>地区</th>
								         <th>我要评价</th>
								      </tr>
								   </thead>
								   <tbody>
								      <tr>
								         <td>罗浩楠</td>
								         <td>带小孩</td>
								         <td>工作日</td>
								         <td>200</td>
								         <td>信阳</td>
								         <td>评价</td>
								      </tr>
								      <tr>
								         <td>罗浩楠</td>
								         <td>带小孩</td>
								         <td>工作日</td>
								         <td>200</td>
								         <td>信阳</td>
								         <td>评价</td>
								      </tr>
								   </tbody>
								</table>
            
            <hr>
            <h2 id="section-5">已完成的</h2>
            	<table class="table table-hover">
								   <thead>
								      <tr>
								         <th>雇主</th>
								         <th>工作类型</th>
								         <th>时间安排</th>
								         <th>日薪</th>
								         <th>地区</th>
								      </tr>
								   </thead>
								   <tbody>
								      <tr>
								         <td>罗浩楠</td>
								         <td>带小孩</td>
								         <td>工作日</td>
								         <td>200</td>
								         <td>信阳</td>
								      </tr>
								      <tr>
								         <td>罗浩楠</td>
								         <td>带小孩</td>
								         <td>工作日</td>
								         <td>200</td>
								         <td>信阳</td>
								      </tr>
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