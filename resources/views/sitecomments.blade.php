<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>X-家政中介 | 留言板</title>
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
	<div class="jumbotron">
        <h5>X-家政中介管理系统</h5>
	</div>


    <div class="row">
    	<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="http://localhost/sitecomment" data-title="请替换成文章的标题" data-url="http://localhost/sitecomment"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"blbl9527"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->
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