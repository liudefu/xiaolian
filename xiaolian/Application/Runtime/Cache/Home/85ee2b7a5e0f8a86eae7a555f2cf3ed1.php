<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8" />
    <title>具体活动页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <script src="/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/Public/front/js/jquery.mobile-1.4.5.min.js"></script>

<style type="text/css">
	*{margin:0;padding:0;list-style:none;border:0;}
	p{font-size:12px;font-weight:200;}
</style>
  </head>

  <body>
	<div data-role="page">
		<div data-role="header">
			<a href="/index.php/Home/index/index.html"  onclick="location.href='/index.php/Home/index/index.html'" data-role="button" data-icon="arrow-l" data-iconpos="notext"></a>
			<img src="<?php echo ($url); echo ($news["newspic"]); ?>" style="width:100%">
			<!-- <img src="<?php echo ($news["newspic"]); ?> " style="width:100%"> -->
		</div>

		<div data-role="content">
			<!--活动内容-->
			<div class="panel-1">
			   
                <p style="color:#8E8E8E;"><!-- “互联青春，绽放未来”——软件学院2016年开学典礼暨迎新晚会在河北师范大学软件学院楼下隆重举办。软件学院管委会主任、博士生导师张子龙，党总支副书记、副院长王喜，副院长、博士生导师赵书良，副院长张玉华，副院长单博，部分专业教师，各年级辅导员及2016级全体新生和部分在校生近千人参加了开学典礼暨迎新晚会。 --><?php echo ($news["content"]); ?></p>
			</div>
			<img src="/Public/front/images/shadow.png" style="width:1500px;height:5px;margin-left:-20px;">
			<!--具体信息-->
			<div class="panel-2">
				<p style="color:#6fd7ca;">活动时间</p>
				<p style="color:#8E8E8E;text-indent:2em;"><!-- 2016年9月23日 --><?php echo ($news["posttime"]); ?></p>
				<p style="color:#6fd7ca;">活动地点</p>
				<p style="color:#8E8E8E;text-indent:2em;"><!-- 河北省石家庄市河北师范大学 --><?php echo ($news["schoolname"]); ?></p>
			</div>
			<img src="/Public/front/images/shadow.png" style="width:1500px;height:5px;margin-left:-20px;">
			<!--活动规则-->
			

			<!--其他相关-->
			<div class="ui-grid-a" style="margin-top:10px;">
				<div class="ui-block-a" style="color:#8E8E8E;font-size:12px;font-weight:200;"> 
					<img src="/Public/front/images/index-activity-specific-like.png" style="width:30px;height:24px;"  onclick="location.href='/index.php/Home/index/collection'">
						有<?php echo ($news["scantime"]); ?>人喜欢此活动
				</div>

				
				<div class="ui-block-b"> <!--调整一下!!将元素固定在最右边-->
					<!-- <img src="/Public/front/images/index-activity-specific-like-user.png" style="width:30px;height:30px;">
					<img src="/Public/front/images/index-activity-specific-like-user.png" style="width:30px;height:30px;">
					<img src="/Public/front/images/index-activity-specific-like-user.png" style="width:30px;height:30px;">
					<img src="/Public/front/images/index-activity-specific-like-user.png" style="width:30px;height:30px;"> -->
				</div>
			</div>
			<img src="/Public/front/images/shadow.png" style="width:1500px;height:5px;margin-left:-20px;">
		</div>

	</div>

  </body>


</html>