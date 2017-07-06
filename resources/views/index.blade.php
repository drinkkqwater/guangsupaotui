<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, width=device-width">
    <title>光速跑腿-烟台</title>
    <link href="https://cdn.bootcss.com/amazeui/2.7.2/css/amazeui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/list.css">
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
</head>
<body>
<div class="layout">
    <!--头部开始-->
    <div class="header">
        <a href="" class="header_left"></a>
        <a href="" class="title">光速跑腿-烟台</a>
        <a href="" class="right_icon" data-am-offcanvas="{target: '#doc-oc'}"><img src="./images/icon_user.png" alt=""></a>
    </div>
    <!--头部结束-->
    <ul class="help_list">
        <li>
            <a href="">
                <img src="./images/icon1.jpg">
                <p>帮我办</p>
            </a>
        </li>
        <li>
            <a href="">
                <img src="./images/icon2.jpg">
                <p>帮我送</p>
            </a>
        </li>
        <li>
            <a href="">
                <img src="./images/icon3.jpg">
                <p>帮我买</p>
            </a>
        </li>
    </ul>

</div>
<div id='container'></div>
<div id='tip' style="display:none"></div>

<!-- 侧边栏内容 -->
<div id="doc-oc" class="am-offcanvas">
    <div class="am-offcanvas-bar am-offcanvas-bar-flip fifter">
        <div class="cav_header">
            <div class="star"><img src="./images/star.jpg"></div>
            <b class="user_name">空白</b>
            <span class="user_info">账号18563828985</span>
            <a href="" class="edit"><img src="./images/edit.png" alt=""></a>
        </div>
        <div class="fen"></div>
        <div class="clearfix"></div>
        <ul class="cav_list">
            <li>
                <span>优惠券</span>
                <a href="" class="count">7</a>
            </li>
            <li>
                <span>账户余额</span>
                <a href="" class="count">0.00</a>
            </li>
            <li>
                <span>30元优惠券</span>
                <a href="" class="btn">立即充值</a>
            </li>
        </ul>
        <div class="fen2"></div>
        <ul class="xx_list">
            <li>
                <a href="">
                    <img src="./images/book.png" alt="">
                    <p>全部订单</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="./images/time.png" alt="">
                    <p>待接单</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="./images/li.png" alt="">
                    <p>进行中</p>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="./images/edd.png" alt="">
                    <p>待评价</p>
                </a>
            </li>
        </ul>
    </div>
</div>


<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=7356ef68f5238e22d51ed685857fb807"></script>
<script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
<script type="text/javascript">
    var map, geolocation;
    //加载地图，调用浏览器定位服务
    map = new AMap.Map('container', {
        resizeEnable: true
    });
    map.plugin('AMap.Geolocation', function() {
        geolocation = new AMap.Geolocation({
            enableHighAccuracy: true,//是否使用高精度定位，默认:true
            timeout: 10000,          //超过10秒后停止定位，默认：无穷大
            buttonOffset: new AMap.Pixel(10, 20),//定位按钮与设置的停靠位置的偏移量，默认：Pixel(10, 20)
            zoomToAccuracy: true,      //定位成功后调整地图视野范围使定位位置及精度范围视野内可见，默认：false
            buttonPosition:'RB'
        });
        map.addControl(geolocation);
        geolocation.getCurrentPosition();
        AMap.event.addListener(geolocation, 'complete', onComplete);//返回定位信息
        AMap.event.addListener(geolocation, 'error', onError);      //返回定位出错信息
    });
    //解析定位结果
    function onComplete(data) {
        var str=['定位成功'];
        str.push('经度：' + data.position.getLng());
        str.push('纬度：' + data.position.getLat());
        if(data.accuracy){
            str.push('精度：' + data.accuracy + ' 米');
        }//如为IP精确定位结果则没有精度信息
        str.push('是否经过偏移：' + (data.isConverted ? '是' : '否'));
        document.getElementById('tip').innerHTML = str.join('<br>');

        AMap.service('AMap.Geocoder',function(){//回调函数
            //实例化Geocoder
            geocoder = new AMap.Geocoder({
                city: "0535"//城市，默认：“全国”
            });
            //TODO: 使用geocoder 对象完成相关功能
        });
        //逆地理编码
        var lnglatXY=[data.position.getLng(),data.position.getLat()];//地图上所标点的坐标
        geocoder.getAddress(lnglatXY, function(status, result) {

            if (status === 'complete' && result.info === 'OK') {
                console.log(result.regeocode.formattedAddress);
            }else{
                //获取地址失败
            }
        });
    }
    //解析定位错误信息
    function onError(data) {
        document.getElementById('tip').innerHTML = '定位失败';
    }

</script>
</body>
</html>