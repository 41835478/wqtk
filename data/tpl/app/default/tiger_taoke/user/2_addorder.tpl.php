<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <title>添加订单</title>
    <link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/css/style.css" rel="stylesheet" />
    <link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/css/swipper.css" rel="stylesheet" />
    <link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/css/preload.css" rel="stylesheet" />
    <link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/css/loading.css" rel="stylesheet" />
    
    <script>
        var deviceWidth = document.documentElement.clientWidth;
        if (deviceWidth > 750) deviceWidth = 750;
        document.documentElement.style.fontSize = deviceWidth / 7.5 + "px";
        document.documentElement.style.width = "100%";
    </script>
</head>
<body>
    <div id="containter" class="container">
        
<div class="ordernav">
        <a href="<?php  echo $this->createMobileUrl('addorder',array('op'=>'add','dluid'=>$dluid))?>" class="cur"><span>添加订单</span></a>
            <a href="<?php  echo $this->createMobileUrl('orderlist',array('op'=>'qb','dluid'=>$dluid))?>"><span>全部订单</span></a>
            <a href="<?php  echo $this->createMobileUrl('orderlist',array('op'=>'df','dluid'=>$dluid))?>"><span>待返</span></a>
            <a href="<?php  echo $this->createMobileUrl('orderlist',array('op'=>'yf','dluid'=>$dluid))?>"><span>已返</span></a>
</div>
<div class="addorder">
    <input type="text" class="orderid" id="tb_code" placeholder="请输入淘宝订单号">
    <div class="flow-button"><input class="flow-btn" id="commit" type="submit" value="确认"></div>
    <div class="addtip"><!--a href="/FAQ/Content/4" class="ordercopyhow">如何复制</a--><a href="<?php  echo $this->createMobileUrl('index')?>" class="attikotti">随便逛逛&gt;</a></div>
    <div style="width:100%"><span style="color:#ff0000;padding-left:15px;">*系统订单录入存在一定延迟，请下单后十分钟后再提交</span><img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/images/sd.jpg" width="100%" height="" alt="" /></div>
</div>

</div>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('newbottom', TEMPLATE_INCLUDEPATH)) : (include template('newbottom', TEMPLATE_INCLUDEPATH));?>

</body>
</html>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/jquery-1.7.2.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/tool.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/asynloading.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/idangerous.swiper.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/common_phone1.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/fun.js"></script>

    <script>
        var swiper2 = new Swiper('.swiper2', {
            slidesPerView: 2.93,
            paginationClickable: true,
            freeMode: true
        });
        $(function () {
            $("#commit").on("click", function () {

                var code = $("#tb_code").val();
                if (code == '') {
                    //alert("请输入淘宝订单号");
                    popwindow("订单", "请输入淘宝订单号");
                    $(".popwcomfirm").hide();
                    $(".popwcancel").html("确定");
                    setTimeout(function () {
                                location.reload();
                            }, 2000);
                    return;
                }
                if (!(/^\d{16}$/.test(code)===true || /^\d{17}$/.test(code)===true)) {
                    popwindow("订单", "亲，订单号为16位或17位的数字哦！");
                    $(".popwcomfirm").hide();
                    $(".popwcancel").html("确定");
                    setTimeout(function () {
                         location.reload();
                    }, 3000);
                    return;
                }
                $.ajax({
                    type: "post",
                    url: "<?php  echo $this->createMobileUrl('addorder',array('op'=>'add','ajax'=>'ajax'))?>",
                    dataType: "json",
                    data: { code: code },
                    success: function (data) {
                        if (data.statusCode == "200") {
                            //alert("添加成功");
                            popwindow("订单", "提示：订单提交成功");
                            $(".popwcomfirm").hide();
                            $(".popwcancel").html("确定");
                            //window.location.reload(); 
                        }else{
                            popwindow("订单", "提示："+data.msg);
                            $(".popwcomfirm").hide();
                            $(".popwcancel").html("确定");
                            setTimeout(function () {
                                location.reload();
                            }, 3000);
                        }
                    }
                });
            });
        });
    </script>