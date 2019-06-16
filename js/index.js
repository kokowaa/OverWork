$(document).ready(function(){


    // Github图片
    $('.Github').mouseenter(function(){
        $('.Github').attr('src','./image/GitHub2.jpg');
    });

    $('.Github').mouseleave(function(){
        $('.Github').attr('src','./image/GitHub1.jpg');
    });


    // wechat 照片
    $('.weChat').mouseenter(function(){
        $('.weChat').attr('src','./image/wechat2.jpg');
        $('weChatPay').css('display','block');
        $('aliPay').css('display','block');
    });

    $('.weChat').mouseleave(function(){
        $('.weChat').attr('src','./image/wechat1.jpg');
        $('weChatPay').css('display','none');
        $('aliPay').css('display','none');
    });



    // QQ 图片
    $('.qq').mouseenter(function(){
        $('.qq').attr('src','./image/QQ12.jpg');
    });

    $('.qq').mouseleave(function(){
        $('.qq').attr('src','./image/QQ11.jpg');
    });



    // Email 图片
    $('.email').mouseenter(function(){
        $('.email').attr('src','./image/Email2.jpg');
    });

    $('.email').mouseleave(function(){
        $('.email').attr('src','./image/Email1.jpg');
    });

    // $('.weChat').mouseenter(function(){
        
    // })
    // $('.weChat').mouseleave(function(){
        
    // })



})