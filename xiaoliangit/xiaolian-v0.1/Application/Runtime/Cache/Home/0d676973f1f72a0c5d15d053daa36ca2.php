<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>     
<html>     
<head>     
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>登陆</title>     
	<meta name="viewport" content="width=device-width, initial-scale=1">     
    <link rel="stylesheet" type="text/css" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/dl-style.css">  
	
</head>               
<body>
	<div data-role="page">
		<div data-role="content">
			<div data-role="controlgroup" data-type="vertical">
            <div style="text-align:center">
                <br/>
                <br/>
                <br/>
                <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/dl-avatar.png">
            </div>
            </div>
               <form action="#" method="post"> 
            <div class="line1">
                <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/dl-zhanghao.png">
                <input type="text"  class="zhanghao" placeholder="账号" name="tel" data-role="none">
            </div>

            <div class="line2">
                <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/dl-mima.png">
                <input type="password"  class="mima" placeholder="密码" name="password" data-role="none">
            </div>
            
          	<br/>
			<div class="chose">                
                <button type="submit"  style="border:none;background-color:'#6fd7ca';width:100%;height:40px;border-radius:10px 10px 6px 6px"> &nbsp;&nbsp;登&nbsp;&nbsp;录&nbsp;&nbsp;</button>

                
            </div>

			<div data-role="fieldcontain">
            	
                	<input type="checkbox" name="blue" id="effect1" class="custom"/ checked="checked"> 
                	<label for="effect1" style="font-size:10px; margin-top:-10px;">我已阅读并同意<a href="#" style="color:#6fd7ca;">《服务条款》</a></label>         
     
        	</div>
		</div>
        </form>
        <div class="footer" data-position="fixed">
	        <div style="margin-bottom:150px;">
		        
		        <a href="register.html" data-ajax="false" style="float:right; color:#6fd7ca;">新用户注册</a>
	        </div>
        </div>
    </div>
</body>
</html>