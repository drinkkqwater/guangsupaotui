// 支付方式
$('#pay').click(function(){
    $('.zhao').show();
    $('.pay').show();
});
$('.zhao').click(function(){
    $('.pay').hide();
    $('.zhao').hide();
});
$('#close').click(function(){
    $('.pay').hide();
    $('.zhao').hide();
});
$('.pay .pay_list li').click(function(){
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
});
// 收货地址列表
$('.sh_map_fujin').click(function(){
    $('.sh_map_fujin p').css('color','#ff9424');
    $('.sh_map_fujin p').css('borderBottom','1px solid #ff9424');
    $('.sh_map_fujin p i').css('background','url(./images/pp1.png)');
    $('.sh_map_old p').css('color','#030303');
    $('.sh_map_old p').css('borderBottom','none');
    $('.sh_map_old p i').css('background','url(./images/oo2.png)');
    $('.old_list').hide();
    $('.fujin_list').show();
});
$('.sh_map_old').click(function(){
    $('.sh_map_old p').css('color','#ff9424');
    $('.sh_map_old p').css('borderBottom','1px solid #ff9424');
    $('.sh_map_old p i').css('background','url(./images/oo1.png)');
    $('.sh_map_fujin p').css('color','#030303');
    $('.sh_map_fujin p').css('borderBottom','none');
    $('.sh_map_fujin p i').css('background','url(./images/pp2.png)');
    $('.old_list').show();
    $('.fujin_list').hide();
});