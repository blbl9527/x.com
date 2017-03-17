<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>X-家政中介 | 后台</title>
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
                    <li><a href="{{route('producer.create')}}">新建新闻</a></li>
                    <li><a href="{{route('consumer.create')}}">删除新闻</a></li>
                </ul>
            </li>

            <li><a href="{{env('site').'/other/sitecomment'}}">网站留言</a></li>
   
        </ul>
        </div>
</div>


	<div class="jumbotron">
        <h3>X-家政中介管理系统后台</h3>
	</div>


    <div class="row">

        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked" id="myNav">
                <li class="active"><a href="#section-1">工作类型管理</a></li>
                <li><a href="#section-2">工作时间管理</a></li>
                <li><a href="#section-3">网站新闻管理</a></li>
                <li><a href="#section-4">网站留言管理</a></li>
                <li><a href="#section-5">其他配置项目</a></li>
            </ul>
        </div>

        <div class="col-xs-9">
            <h2 id="section-1">工作类型管理</h2>
				<table class="table table-hover">			   
				   <tbody>
				      	<tr>
					         <td><a href="http://blbl9527.duoshuo.com/admin/">添加类型</a></td>
					         <td><a href="http://blbl9527.duoshuo.com/admin/pending/">修改类型</a></td> 
				      	</tr>
				      	<tr>
				      		<td><a href="http://blbl9527.duoshuo.com/admin/approved/">最热类型</a></td>
				      		<td><a href="http://blbl9527.duoshuo.com/admin/spam/">所有类型</a></td>
					    </tr>
				   </tbody>
				</table>
            
            <hr>
            <h2 id="section-2">工作时间管理</h2>
				<table class="table table-hover">			   
				   <tbody>
				      	<tr>
					         <td><a href="http://blbl9527.duoshuo.com/admin/">添加类型</a></td>
					         <td><a href="http://blbl9527.duoshuo.com/admin/pending/">修改类型</a></td> 
				      	</tr>
				      	<tr>
				      		<td><a href="http://blbl9527.duoshuo.com/admin/approved/">最热类型</a></td>
				      		<td><a href="http://blbl9527.duoshuo.com/admin/spam/">所有类型</a></td>
					    </tr>
				   </tbody>
				</table>
            
            <hr>
            <h2 id="section-3">网站新闻管理</h2>
				<table class="table table-hover">			   
				   <tbody>
				      	<tr>
					         <td><a href="http://blbl9527.duoshuo.com/admin/">添加文章</a></td>
					         <td><a href="http://blbl9527.duoshuo.com/admin/pending/">修改文章</a></td> 
				      	</tr>
				      	<tr>
				      		<td><a href="http://blbl9527.duoshuo.com/admin/approved/">最热类型</a></td>
				      		<td><a href="http://blbl9527.duoshuo.com/admin/spam/">删除文章</a></td>
					    </tr>
					    <tr>
				      		<td><a href="http://blbl9527.duoshuo.com/admin/approved/">文章列表</a></td>
					    </tr>
				   </tbody>
				</table>        
            <hr>
            <h2 id="section-4">网站留言管理</h2>
				<table class="table table-hover">			   
				   <tbody>
				      	<tr>
					         <td><a href="http://blbl9527.duoshuo.com/admin/">留言后台</a></td>
					         <td><a href="http://blbl9527.duoshuo.com/admin/pending/">等待审核</a></td>
					         <td><a href="http://blbl9527.duoshuo.com/admin/approved/">已通过的</a></td>
				      	</tr>
				      	<tr>
				      		<td><a href="http://blbl9527.duoshuo.com/admin/spam/">垃圾评论</a></td>
					        <td><a href="http://blbl9527.duoshuo.com/admin/deleted/">已删除的</a></td>
					        <td><a href="http://blbl9527.duoshuo.com/admin/report/">被举报的</a></td>
					    </tr>
					    <tr>
				         <td><a href="http://blbl9527.duoshuo.com/admin/toppost/">被置顶的</a></td>
				      </tr>
				   </tbody>
				</table>
            
            <hr>
            <h2 id="section-5">友情链接管理</h2>
            	<table class="table table-hover">			   
				   <tbody>
				      	<tr>
					         <td><a href="http://blbl9527.duoshuo.com/admin/">添加友链</a></td>
					         <td><a href="http://blbl9527.duoshuo.com/admin/pending/">修改友链</a></td> 
                   <td><a href="http://blbl9527.duoshuo.com/admin/pending/">删除友链</a></td>
				      	</tr>
                <tr>
                   <td><a href="http://blbl9527.duoshuo.com/admin/">网站公告</a></td>
                   <td><a href="http://blbl9527.duoshuo.com/admin/pending/">站长寄语</a></td> 
                   <td><a href="http://blbl9527.duoshuo.com/admin/pending/">每日寄语</a></td>
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