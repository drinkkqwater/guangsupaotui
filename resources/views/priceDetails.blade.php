<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>价格明细</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/list.css">
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
</head>
<body>
<div class="layout">
    <!--头部开始-->
    <div class="header">
        <a href="" class="header_left"></a>
        <a href="" class="title">价格明细</a>
        <a href="" class="header_right orange">计价标准</a>
    </div>
    <!--头部结束-->
    <ul class="mx_info_title">
        <li>
            <p>合计费用</p>
            <span class="orange">￥25.00</span>
        </li>
        <li>
            <p>预计里程</p>
            <span id="distance">计算中...</span>
        </li>
    </ul>
    <div class="mx_tishi">
        实际费用可能因实际行驶里程/等候时间等因素而异
    </div>
    <div class="mx_price">
        <p>起步价(含3公里)</p>
        <span><d>26.00</d>元</span>
    </div>
    <div class="mx_hui">
        <p>优惠券折扣</p>
        <span><d>-1.00</d> 元</span>
    </div>
    <p class="mx_zhu">注：预估价格根据以下线路进行计算</p>
    <div class="mx_map">
        <div class="map_info">
            <div id='container'></div>
            <div id='tip' style="display:none"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=7356ef68f5238e22d51ed685857fb807&plugin=AMap.Walking"></script>
<script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
<script type="text/javascript">
    var map, geolocation;
    //加载地图，调用浏览器定位服务
    map = new AMap.Map('container', {
        resizeEnable: true
    });
    var walking = new AMap.Walking({
        map: map
    });
    walking.search([
        {keyword: '开发区金东幼儿园',city:'烟台'},
        {keyword: '振华商厦开发区店',city:'烟台'}
    ],function(status,result){

        var distance = result.routes[0].distance;
        if(distance < 1000){
            var dd = distance+"米";
            document.getElementById('distance').innerHTML = dd;
        }else{
            var dd = (Math.round(distance/100)/10).toFixed(1) + "公里";
            document.getElementById('distance').innerHTML = dd;
        }

    });


</script>

</body>
</html>