<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <title>全部订单</title>
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
        <a href="<?php  echo $this->createMobileUrl('addorder',array('op'=>'add','dluid'=>$dluid))?>"><span>添加订单</span></a>
        <a href="<?php  echo $this->createMobileUrl('orderlist',array('op'=>'qb','dluid'=>$dluid))?>" <?php  if($_GPC['op']=='qb') { ?> class="cur"<?php  } ?>><span>全部订单</span></a>
        <a href="<?php  echo $this->createMobileUrl('orderlist',array('op'=>'df','dluid'=>$dluid))?>" <?php  if($_GPC['op']=='df') { ?> class="cur"<?php  } ?>><span>待返</span></a>
        <a href="<?php  echo $this->createMobileUrl('orderlist',array('op'=>'yf','dluid'=>$dluid))?>" <?php  if($_GPC['op']=='yf') { ?> class="cur"<?php  } ?>><span>已返</span></a>
</div>


<style>
.usertx {
        width: 7.5rem;
        display: -webkit-box;
        height: 45px;
        line-height: 45px;
        -webkit-box-align: center;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0 0.2rem;
        border-bottom: 1px solid #f0f0f0;
        font-size: 14px;
        position: relative;
        width:100%;
        

    }
    .usertx span {
        display: block;
        color: #888;
    }
    .usertx .userpointer {
        position: absolute;
        color: #444;
        font-size: 16px;
        left:15px;
    }
     .usergotx {
        position: absolute;
        right:20px;
    }
    .olist{
     width:100%;    border-bottom: 1px solid #f0f0f0;padding: 0 0.2rem;
     height:60px;padding-top:5px;padding-bottom:5px;

    }
    .oleft{display:inline-block;width:70%;padding-left:5px;line-height:20px;}
    .oright{    display: inline-block;
    width: 21%;
    text-align: center;
    padding-right: 8px;
    line-height: 60px;
    height: 50px;
    float: right;
}}

</style>
<div class="allorder">
    <ul id="lists">
    <?php  if($order) { ?>
        <?php  if(is_array($order)) { foreach($order as $v) { ?>
          <div class="olist">
            <?php  if($v['type']==1) { ?>
                <span class="oleft">朋友<?php  echo $v['jlnickname'];?>的订单：<br>订单号:<?php  echo $v['orderid'];?><br>
                <?php  if($cfg['fxtype']==1) { ?>
                奖励：<?php  if($v['yongjin']) { ?><?php  echo intval($v['yongjin']*$cfg['yjf']/100*$cfg['jfbl'])?><?php  echo $cfg['hztype'];?><?php  } else { ?>审核中<?php  } ?>
                <?php  } else { ?>
                奖励：<?php  if($v['yongjin']) { ?><?php  echo number_format($v['yongjin']*$cfg['yjf']/100, 2, '.', '')?><?php  echo $cfg['yetype'];?><?php  } else { ?>审核中<?php  } ?>
                <?php  } ?>            

            <?php  } else if($v['type']==2) { ?>
                <span class="oleft">朋友的朋友<?php  echo $v['jlnickname'];?>订单：<br>订单号:<?php  echo $v['orderid'];?><br>
                <?php  if($cfg['fxtype']==1) { ?>
                奖励：<?php  if($v['yongjin']) { ?><?php  echo intval($v['yongjin']*$cfg['ejf']/100*$cfg['jfbl'])?><?php  echo $cfg['hztype'];?><?php  } else { ?>审核中<?php  } ?>
                <?php  } else { ?>
                奖励：<?php  if($v['yongjin']) { ?><?php  echo number_format($v['yongjin']*$cfg['ejf']/100, 2, '.', '')?><?php  echo $cfg['yetype'];?><?php  } else { ?>审核中<?php  } ?>
                <?php  } ?>   
            <?php  } else { ?>
                <span class="oleft">我的自购<br>订单号:<?php  echo $v['orderid'];?><br>
                <?php  if($cfg['fxtype']==1) { ?>
                奖励：<?php  if($v['yongjin']) { ?><?php  echo intval($v['yongjin']*$cfg['zgf']/100*$cfg['jfbl'])?><?php  echo $cfg['hztype'];?><?php  } else { ?>审核中<?php  } ?>
                <?php  } else { ?>
                奖励：<?php  if($v['yongjin']) { ?><?php  echo number_format($v['yongjin']*$cfg['zgf']/100, 2, '.', '')?><?php  echo $cfg['yetype'];?><?php  } else { ?>审核中<?php  } ?>
                <?php  } ?>
            <?php  } ?>
            
            </span>
            <?php  if($v['sh']==1) { ?>
            <span class="oright" style="color:#C06800">待返</span>
            <?php  } else if($v['sh']==2) { ?>
             <span class="oright" style="color:#067A00">已返</span>
            <?php  } else if($v['sh']==0) { ?>
             <span class="oright" style="color:#ff0000">暂无该订单</span>
            <?php  } else if($v['sh']==3) { ?>
            <span class="oright" style="color:#C06800">已审核</span>
            <?php  } else { ?>
            <span class="oright" style="color:#C06800">订单失效</span>
            <?php  } ?>
          </div>         
        <?php  } } ?>
    <?php  } else { ?>
        <div class="nocoll">
          <p>这里还没有订单呢~</p>
        </div>
    <?php  } ?>
    </ul>
</div>

</div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('newbottom', TEMPLATE_INCLUDEPATH)) : (include template('newbottom', TEMPLATE_INCLUDEPATH));?>
</body>
</html>

