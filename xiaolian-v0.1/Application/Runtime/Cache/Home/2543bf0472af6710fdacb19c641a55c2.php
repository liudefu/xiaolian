<?php if (!defined('THINK_PATH')) exit();?>  <!DOCTYPE html>
 <html>
 <head>
	 <title>注册界面</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="/xiaolian/xiaolian-v0.1/Public/front/css/shezhi-style.css">   
    <link rel="stylesheet" href="/xiaolian/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolian/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
=======
    <link rel="stylesheet" type="text/css" href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/shezhi-style.css">   
    <link rel="stylesheet" href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
</head>
<body>
    <div data-role="page">
               <div data-role="header" style="background-color:#6fd7ca; color:white;">
<<<<<<< HEAD
			     <a href="/xiaolian/xiaolian-v0.1/index.php/Home/mine/mine.html" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/mine/mine.html'"  data-icon="arrow-l" data-iconpos="notext"></a>
=======
			     <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/mine.html" onclick="location.href='/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/mine.html'"  data-icon="arrow-l" data-iconpos="notext"></a>
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
			        <h1 style="font-weight:200;">完善个人资料</h1>
		       </div>
        <div data-role="content">
            <div data-role="controlgroup" data-type="vertical">
            <div style="text-align:center">

		       <div data-role="content" style="overflow-x:visible;">
			       <div class="user" style="height:130px;">
                <!--实现点击头像或者相机可以更改头像-->
	                  <div class="avatar">    
<<<<<<< HEAD
	                     <img src="/xiaolian/xiaolian-v0.1/Public/front/images/mine-user.png" style="clear:both; display: block; margin:auto;">
	                        <a href="/xiaolian/xiaolian-v0.1/index.php/Home/mine/avatar.html" onclick="location.href='/xiaolian/xiaolian-v0.1/index.php/Home/mine/avatar.html'"><button type="button" id="open" style="background:url(/xiaolian/xiaolian-v0.1/Public/front/images/mine-shezhi-cam.png); width:10px; margin:-25px 0 0 160px; border:none;"></button></a>
=======
	                     <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-user.png" style="clear:both; display: block; margin:auto;">
	                        <a href="/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/avatar.html" onclick="location.href='/xiaolianV0.1/xiaolian-v0.1/index.php/Home/mine/avatar.html'"><button type="button" id="open" style="background:url(/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-cam.png); width:10px; margin:-25px 0 0 160px; border:none;"></button></a>
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
	                  </div>

            </div>
            </div>
               
                        <div class="line1">
<<<<<<< HEAD
                              <img src="/xiaolian/xiaolian-v0.1/Public/front/images/mine-shezhi-uname.png">
=======
                              <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-uname.png">
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
                              <input type="text"  id="zhanghao" class="zhanghao" value="用户名" onfocus="if(value=='用户名') {value=''}" onblur="if (value=='') {value='用户名'}" data-role="none">
                        </div>

                        <div class="line2">
                              <div class="ui-grid-a">
								                   <div class="ui-block-a">
<<<<<<< HEAD
									<img src="/xiaolian/xiaolian-v0.1/Public/front/images/mine-shezhi-sex.png" style="float:left; margin:14px 0 0 0;">
=======
									<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-sex.png" style="float:left; margin:14px 0 0 0;">
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
									<label for="sex" style="margin:20px 90px 0 20px;">性别</label>
								</div>
							    <div class="ui-block-b" style="margin:0px 0px 0 -50px;">
									<fieldset>
										<select name="sex" id="sex" style="heigth:80px;">
											<option value="boy">男</option>
											<option value="girl">女</option>
										</select>
									</fieldset>
							    </div>								
				              </div>
                        </div>

                        <div class="line3">
                              <div class="ui-grid-a">
								<div class="ui-block-a">
<<<<<<< HEAD
									<img src="/xiaolian/xiaolian-v0.1/Public/front/images/mine-shezhi-birth.png" style="float:left; margin:14px 0 0 0;">
=======
									<img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-birth.png" style="float:left; margin:14px 0 0 0;">
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
									<label for="sex" style="margin:20px 90px 0 20px;">生日</label>
								</div>
							    <div class="ui-block-b" style="margin:0px 0px 0 -50px;">
									<input type="date" name="birth" id="birth" >
							    </div>								
				              </div>
                        </div>

                        <div class="line4">
<<<<<<< HEAD
                               <img src="/xiaolian/xiaolian-v0.1/Public/front/images/mine-shezhi-univer.png">
=======
                               <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-univer.png">
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
                               <input type="text"  id="daxue" class="daxue" value="大学" onfocus="if(value=='大学') {value=''}" onblur="if (value=='') {value='大学'}" data-role="none">
                        </div>

                        <div class="line5">
<<<<<<< HEAD
                               <img src="/xiaolian/xiaolian-v0.1/Public/front/images/mine-shezhi-gq.png">
=======
                               <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/mine-shezhi-gq.png">
>>>>>>> b97616b8f36e0ed1bc87c2648e5395d0fc655134
                               <input type="text"  id="daxue" class="daxue" value="个性签名" onfocus="if(value=='个性签名') {value=''}" onblur="if (value=='') {value='个性签名'}" data-role="none">
                        </div>
                        <br/>
                        <form action="#" method="post"> 			
				            <a href="#" data-role="button" data-theme="b" id="login" onclick="but_click();" style="background:#6fd7ca; border:none;">提交</a>
			            </form>

        </div>
    </div>
</body>
</html>