<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>收货地址</title>
    <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/list.css">

</head>
<body>
<div class="layout">
    <!--头部开始-->
    <div class="header">
        <a href="" class="header_left"></a>
        <a href="" class="title"><span>收货地·</span>烟台市</a>
    </div>
    <!--头部结束-->
    <div class="sh_dq">
        <a href="#">
            <span>[当前]</span>
            <b id="position_index">定位中...</b>
            <p id="position_dec"></p>
        </a>
    </div>
    <div class="sh_dq_info">
        <input type="text" placeholder="楼层/门牌号">
        <a href="#">确定</a>
    </div>
    <div class="sh_map">
        <div id='container'></div>
        <div id='tip' style="display:none"></div>
    </div>
    <div class="sh_map_title">
        <a href="#" class="sh_map_fujin"><p><i></i>附近的点</p></a>
        <a href="#" class="sh_map_old"><p><i></i>历史纪录</p></a>
    </div>
    <div class="sh_map_list">
        <ul class="fujin_list">
            <li>
                <a href="#">
                    <p class="sh_list_title">振华商厦开发区店</p>
                    <p class="sh_list_info">烟台开发区长江路28号(黄山路口)</p>
                </a>
            </li>
        </ul>
        <ul class="old_list">
            <li>
                <a href="#">
                    <p class="sh_list_title">历史纪录1</p>
                    <p class="sh_list_info">烟台开发区长江路28号(黄山路口)</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <p class="sh_list_title">历史纪录2</p>
                    <p class="sh_list_info">烟台开发区长江路28号(黄山路口)</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div id="panel" style="display:none"></div>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="./js/index.js"></script>
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
        var address;
        var address_dec;
        var lnglatXY=[data.position.getLng(),data.position.getLat()];//地图上所标点的坐标
        geocoder.getAddress(lnglatXY, function(status, result) {

            if (status === 'complete' && result.info === 'OK') {
                address = result.regeocode.formattedAddress;

                AMap.service(["AMap.PlaceSearch"], function() {
                    var placeSearch = new AMap.PlaceSearch({ //构造地点查询类
                        pageSize: 5,
                        pageIndex: 1,
                        city: "0535", //城市
                        map: map
                    });
                    //关键字查询
                    placeSearch.search(address,function(status,result){
                        var position_index = result.poiList.pois[0].name;
                        var position_dec = result.poiList.pois[0].address;
                        document.getElementById('position_index').innerHTML = position_index;
                        document.getElementById('position_dec').innerHTML = position_dec;
                        var arr_list = result.poiList.pois;
                        for (var k = 0; k < arr_list.length; k++) {
                            $('.fujin_list').append('<li><a href="#"><p class="sh_list_title">'+result.poiList.pois[k].name+'</p><p class="sh_list_info">'+result.poiList.pois[k].address+'</p></a></li>');
                        }
                    });
                });

            }else{
                //获取地址失败
                document.getElementById("position_index").innerHTML = '获取失败';
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