<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> 
<html> 
  <head> 
    <meta charset="utf-8" />
    <title>足迹</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <link rel="stylesheet" href="/xiaolianV0.1/xiaolian-v0.1/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/xiaolianV0.1/xiaolian-v0.1/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    <script src="http://webapi.amap.com/maps?v=1.3&key=00128980e7295d01238e56ed1e839e92"></script>
    <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
  </head>

  <body> 
    <div data-role="page" theme="b"> 
        <div data-role="header">

        </div>
        
        <div data-role="content"> 
            <div id="container"></div>
            <div class="button-group">
                <input id="setCenter" type="button" class="button" value=""/>
            </div>
        </div>
<script>
    var map = new AMap.Map('container', {
        resizeEnable: true,
        center: [116.397428, 39.90923],
        zoom: 13
    });
    AMap.event.addDomListener(document.getElementById('setCenter'), 'click', function() {
        // 设置缩放级别和中心点
        map.setZoomAndCenter(14, [116.205467, 39.907761]);
        // 在新中心点添加 marker 
        var marker = new AMap.Marker({
            map: map,
            position: [116.205467, 39.907761]
        });
    });
</script>
        
        <div data-role="footer" data-position="fixed"> 
            <div data-role="navbar">
              <ul>
                <li>
                    <a href="show.html" style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/shouye.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">首页</p>
                    </a>
                </li>
                <li>
                    <a href="task.html"  style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/renwu.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">匹配任务</p>
                    </a>
                </li>
                <li>
                    <a href="kankan.html"  style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/kankan.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">看看</p>
                    </a>
                </li>
                <li>
                    <a href="foot.html"  style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/zuji.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">足迹</p>
                    </a>
                </li>
                <li>
                    <a href="mine.html"  style="background-color:#6fd7ca;">
                        <img src="/xiaolianV0.1/xiaolian-v0.1/Public/front/images/wode.png" style="width:24px; height:24px;">
                        <p style="margin:1px 0px -5px 0px;color: #fff;font-size:12px;font-weight:100;font-family:'微软雅黑';">我的</p>
                    </a>
                </li>
              </ul>
            </div>
        </div>
     </div>
  </body> 
</html>