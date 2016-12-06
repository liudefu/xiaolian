<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>校脸新闻添加</title>
<link rel="stylesheet" href="/xiaolian/thinkphp_3.2.3/Public/end/css/bootstrap.css">
<link href="/xiaolian/thinkphp_3.2.3/Public/end/css/jquery-ui.css" rel="stylesheet">
<link href="/xiaolian/thinkphp_3.2.3/Public/end/css/mystyle.css" rel="stylesheet">
<script src="/xiaolian/thinkphp_3.2.3/Public/end/js/jquery.js"></script>    
<script src="/xiaolian/thinkphp_3.2.3/Public/end/js/bootstrap.min.js"></script>
<script charset="utf-8" src="/xiaolian/thinkphp_3.2.3/Public/end/js/editor/kindeditor.js"></script>
<script charset="utf-8" src="/xiaolian/thinkphp_3.2.3/Public/end/js/editor/lang/zh_CN.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>

</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   
    <span class="navbar-logo" > 校脸</span>
   </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    
    <ul class="nav navbar-nav navbar-right mr">
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：Administrator</a></li>
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav> 

  <div class="row">
      <div class=" col-md-2 sidebar">
        <div id="accordion">
          <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li  ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/user/user_list.html">用户管理</a></li>
              <!-- <li  ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/user/user_add.html">添加管理员</a></li>
            <li ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/user/user_pass.html">修改个人密码</a></li>
            <li ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/user/user_edit.html">修改个人信息</a></li> -->
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-file"></span>任务管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/task/task_add.html">添加任务</a></li>
            <li><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/task/task_list.html">推荐任务</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-book"></span>新闻管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/news/news_add.html">添加新闻</a></li>
            <li><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/news/news_list.html">管理新闻</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>大学管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/school/school_add.html">添加大学</a></li>
            <li ><a href="/xiaolian/thinkphp_3.2.3/index.php/Admin/school/school_list.html">大学列表</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-10 col-md-offset-2 ">
        <ol class="breadcrumb">
          <li><a href="#">首页</a></li>
          <li><a href="#">大学管理</a></li>
          <li class="active">编辑大学</li>
        </ol>
        <div class="table-responsive ">
          <h3>编辑大学 <small>School Edit</small></h3>
         <div class="list-group form">
          <form enctype="multipart/form-data" class="form-horizontal" role="form" method="post" >
          <input type="hidden" name="id" value="<?php echo ($school["id"]); ?>">
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">大学名称</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" id="inputEmail3" placeholder="" name="sname" value="<?php echo ($school["sname"]); ?>">
              </div>
            </div>
            
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">添加时间</label>
              <div class="col-sm-10"><input type="input" class="form-control" id="inputEmail3" placeholder=""  name="stime" value="<?php echo date('Y-m-d  H:i:s');?>"></div>
            </div>
           
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">大学地点</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" id="inputEmail3" placeholder="" name="splace" value="<?php echo ($school["splace"]); ?>">
              </div>
            </div>
           
          
            
            <div class="list-group-item">
              <div class="col-sm-offset-2 col-sm-5">
              <div class="row">
              <div class=" col-sm-5">
                <button type="submit" class="btn btn-primary">保存</button>
              </div>
              </div>
              </div>
            </div>
          </form>
        </div>
          
     
  
    </div>
    </div>
  </div>
          
  
</div>
<script src="/xiaolian/thinkphp_3.2.3/Public/end/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>