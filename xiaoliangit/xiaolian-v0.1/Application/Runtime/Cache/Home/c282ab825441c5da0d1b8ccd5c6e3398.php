<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>收藏</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/xiaoliangit/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaoliangit/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page">
		<div data-role="header" style="background-color:#6fd7ca; color:white;">
			<a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/mine.html" data-icon="arrow-l" data-iconpos="notext"></a>
			<h1 style="font-weight:200;">收藏</h1>			
		</div>
		<div data-role="content">
			<div>
            <?php if(is_array($collection)): $i = 0; $__LIST__ = $collection;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><a href="" onclick="location.href='/xiaoliangit/xiaolian-v0.1/index.php/Home/index/activity_specific/id/<?php echo ($c["nid"]); ?>'" style="text-decoration:none;">
                	<span>
                		<img src="<?php echo ($url); echo ($c["newspic"]); ?>" style="width:100%">
                		<p style="color:#8E8E8E;font-size:12px;font-family:'微软雅黑';font-weight:200;"><?php echo ($c["content"]); ?></p>
                    </span>
                </a>
                <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:-10px 0 10px -15px";><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            
            <!-- <div>
                <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/activity-specific.html" style="text-decoration:none;">
                	<span>
                		<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-activity.png" style="width:100%">
                		<p style="color:#8E8E8E;font-size:12px;font-family:'微软雅黑';font-weight:200;">河北师范大学2016年度迎新送老晚会将于9月23日在软件楼门口举行，届时将会有精彩的演出，欢迎同学们前来观看</p>
                    </span>
                </a>
            </div>
            <img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/longline.png" style="margin:-10px 0 10px -15px";>
            <div>
                <a href="/xiaoliangit/xiaolian-v0.1/index.php/Home/mine/activity-specific.html" style="text-decoration:none;">
                	<span>
                		<img src="/xiaoliangit/xiaolian-v0.1/Public/front/images/index-activity.png" style="width:100%">
                		<p style="color:#8E8E8E;font-size:12px;font-family:'微软雅黑';font-weight:200;">河北师范大学2016年度迎新送老晚会将于9月23日在软件楼门口举行，届时将会有精彩的演出，欢迎同学们前来观看</p>
                    </span>
                </a>
            </div> -->
		</div>
	</div>
</body>
</html>