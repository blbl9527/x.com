<!DOCTYPE html>
<html>
<head>
<title>x-家政系统 | 求职</title>
  <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
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

    <div class="jumbotron">
        <p>x 家政中介管理系统</p>
    </div>

    <div class="row"> <!-- 中 -->
        <div class="col-xs-4">
            <div class="alert alert-success"><h4>公告:</h4><p>本系统的建立初衷是为家政从业人员提供一个求职的去处，虽然类似的平台有很多，但是或多或少都存在这样那样的问题。本系统主要是从业人员发布求职的地方，对于招聘的功能，可能长期不会开发，因为有太多居心不良的人总是借着各种各样的手段进行诈骗，为什么要欺负那些善良的人？</p>
            </div>
            
            <div class="alert alert-success"><h4>家政新闻:</h4>
            <p>虽然本系统可能会很久不会开放招聘的功能，但是并不影响招聘者来这里选择合适的雇佣为您所用，在这里您不用担心漫天飞的广告，这里不会有广告。</p>
            </div>
            
            <div class="alert alert-success"><h4>每日寄语:</h4>
            <p>本站不会以任何形式收取人和费用，望各位求职者在享受互联网的便捷的同事也要提高自己的警惕，防止被骗。</p>
            </div>
            
            <div class="alert alert-info"><h4>站长有话说:</h4>本站建立并不容易，欢迎各种形式<a href="">打赏<a/>，金额不限！
            </div>
        </div>

        <div class="col-xs-8">
            <form class="form-horizontal" role="form">
               <div class="form-group">
                  <label for="workclassid" class="col-sm-3 control-label">工作类型</label>
                  <div class="col-sm-6">
                    <select name="workclassid" class="form-control">
						<option value="">带孩子</option>
						<option value="">打扫卫生</option>
						<option value="">做饭</option>
						<option value="">搬家</option>
						<option value="">写作业</option>
					</select>
                  </div>
               </div>

               <div class="form-group">
                  <label for="timeclassid" class="col-sm-3 control-label">时间类型</label>
                  <div class="col-sm-6">
                     <select name="timeclassid" class="form-control">
						<option value="">工作日</option>
						<option value="">休息日</option>
						<option value="">星期一</option>
						<option value="">星期二</option>
						<option value="">星期三</option>
					</select>
                  </div>
               </div>

               <div class="form-group">
                  <label for="areaid" class="col-sm-3 control-label">工作区域</label>
                  <div class="col-sm-6">
                     <select name="areaid" class="form-control">
						<option>平顶山</option>
						<option>信阳</option>
						<option>河南</option>
						<option>河北</option>
						<option>石家庄</option>
					</select>
                  </div>
               </div>

               
               <div class="form-group">
                  <label for="salary" class="col-sm-3 control-label">薪资要求</label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control" id="salary"
                        placeholder="请输入您的日薪要求">
                  </div>
               </div>

               <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">email</label>
                  <div class="col-sm-6">
                     <input type="email" class="form-control" id="email"
                        placeholder="请输入邮件地址">
                  </div>
               </div>
               <div class="form-group">
                  <label for="phone" class="col-sm-3 control-label">电话</label>
                  <div class="col-sm-6">
                     <input type="text" class="form-control" id="phone"
                        placeholder="请输入您的电话">
                  </div>
               </div>
               <div class="form-group">
                  <label for="other" class="col-sm-3 control-label">其他描述</label>
                  <div class="col-sm-6">
                     <textarea name="other" class="form-control" rows="3">其他描述</textarea>
                  </div>
                  
              </div>
                <div class="form-group">
                    <label for="conference" class="col-sm-3 control-label">我已阅读协议并同意</label>
                    <label class="checkbox-inline">
                      <input type="radio" name="conference" id="optionsRadios3"
                         value="yes" checked> 是
                    </label>
                    <label class="checkbox-inline">
                      <input type="radio" name="conference" id="optionsRadios4"
                         value="no"> 否
                    </label>
                </div>
               <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-6">
                     <button type="submit" class="btn btn-default">发布求职信息</button>
                  </div>
               </div>
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

</body>
</html>