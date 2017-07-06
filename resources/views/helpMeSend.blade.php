<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>帮我送</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="layout">
    <!--头部开始-->
    <div class="header">
        <a href="" class="header_left"></a>
        <a href="" class="title">帮我送</a>
        <a href="" class="header_right">使用须知</a>
    </div>
    <!--头部结束-->
    <!--图标列表开始-->
    <ul class="list_icon">
        <li class="active">
            <a href="">
                <i><img src="./images/icon_active.png" alt=""></i>
                <img src="./images/icon_more.png" alt=""><p>其他</p>
            </a>
        </li>
        <li><a href=""><img src="./images/icon_food.png" alt=""><p>美食</p></a></li>
        <li><a href=""><img src="./images/icon_file.png" alt=""><p>文件</p></a></li>
        <li><a href=""><img src="./images/icon_xian.png" alt=""><p>生鲜</p></a></li>
        <li><a href=""><img src="./images/icon_hua.png" alt=""><p>鲜花</p></a></li>
        <li><a href=""><img src="./images/icon_key.png" alt=""><p>钥匙</p></a></li>
        <li><a href=""><img src="./images/icon_phone.png" alt=""><p>电子产品</p></a></li>
    </ul>
    <!--图表列表结束-->
    <!--列表项开始-->
    <ul class="list_info">
        <li>
            <a href="">
                <span class="list_info_left"><img src="./images/icon_call.png" alt=""></span>
                <p>
                    <span>发货电话</span>
                    <span class="info">18563828985(自己)</span>
                </p>
                <span class="list_info_right"><img src="./images/icon_tt.png" alt=""></span>
            </a>
        </li>
        <li>
            <a href="">
                <span class="list_info_left"><img src="./images/icon_fly.png" alt=""></span>
                <p>
                    <span>发货地址</span>
                    <span class="info">烟台开发区金东幼儿园</span>
                </p>
                <span class="list_info_right"><img src="./images/icon_right.png" alt=""></span>
            </a>
        </li>
    </ul>
    <ul class="list_info">
        <li>
            <a href="">
                <span class="list_info_left"><img src="./images/icon_call.png" alt=""></span>
                <p>
                    <span>收货电话</span>
                    <span class="info">13011111111</span>
                </p>
                <span class="list_info_right"><img src="./images/icon_tt.png" alt=""></span>
            </a>
        </li>
        <li>
            <a href="">
                <span class="list_info_left"><img src="./images/icon_position.png" alt=""></span>
                <p>
                    <span>收货地址</span>
                    <span class="info">振华商厦开发区店</span>
                </p>
                <span class="list_info_right"><img src="./images/icon_right.png" alt=""></span>
            </a>
        </li>
    </ul>
    <ul class="list_info">
        <li>
            <a href="">
                <span class="list_info_left"><img src="./images/icon_car.png" alt=""></span>
                <p>
                    <span>汽车</span>
                </p>
                <span class="list_info_right"><img src="./images/icon_down.png" alt=""></span>
            </a>
        </li>
    </ul>
    <ul class="list_info">
        <li>
            <a href="">
                <span class="list_info_left"><img src="./images/icon_bei.png" alt=""></span>
                <p>
                    <span>备注留言</span>
                    <span class="info te">订单信息补充</span>
                </p>
            </a>
        </li>
    </ul>
    <!--列表项结束-->
    <div class="ge"></div>
    <!--底部开始-->
    <div class="footer">
        <div class="footer_left">
            <img src="./images/icon_tan.jpg">
            <p>费用 <span>25.00</span></p>
        </div>
        <a href="#" id="pay" class="footer_right">去支付</a>
    </div>
    <!--底部结束-->
    <!--付款区域开始-->
    <div class="zhao"></div>
    <div class="pay">
        <div class="pay_title">付款详情</div>
        <a href="#" id="close" class="close"><img src="./images/close.jpg"></a>
        <div class="fen"></div>
        <p class="pay_m">需支付金额</p>
        <p class="money">11.00元</p>
        <p class="dec">(跑腿费12.00元,已优惠1.00元)</p>
        <ul class="pay_list">
            <li class="active">
                <a href="#">
                    <i><img src="./images/wx.jpg"></i>
                    <p class="list_title">微信支付</p>
                    <p class="list_dec">推荐安装微信5.0及以上版本的使用</p>
                    <div class="que"></div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i><img src="./images/zfb.jpg"></i>
                    <p class="list_title">支付宝支付</p>
                    <p class="list_dec">推荐有支付宝账号的人使用</p>
                    <div class="que"></div>
                </a>
            </li>
            <li>
                <a href="#">
                    <i><img src="./images/zh.jpg"></i>
                    <p class="list_title">账户支付</p>
                    <p class="list_dec">账户余额:￥0.00</p>
                    <div class="no_pay">余额不足</div>
                </a>
            </li>
        </ul>
        <div class="yes">
            <a href="#">确认付款</a>
        </div>
    </div>
    <!--付款区域结束-->
</div>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="./js/index.js"></script>
</body>
</html>