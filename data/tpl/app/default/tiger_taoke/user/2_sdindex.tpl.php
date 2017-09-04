<?php defined('IN_IA') or exit('Access Denied');?><!doctype html>
<html class="no-js">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
<title>晒单广场</title>

<link rel="stylesheet" type="text/css" href="//cdn.bootcss.com/amazeui/2.7.2/css/amazeui.css"/>
<link rel="stylesheet" type="text/css" href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style2/css/style.css" />

<script type="text/javascript" src="//cdn.bootcss.com/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
<script type="text/javascript" src="//cdn.bootcss.com/fastclick/1.0.6/fastclick.min.js"></script>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<!-- 微信自定义接口 -->
<script>
	wx.config();
	wx.ready(function(){
		wx.onMenuShareAppMessage({
			title: document.title,
			desc: "",
			link: window.location.href ,
			imgUrl: ""
		}); 
		wx.onMenuShareTimeline({
			title: document.title,
			desc: "",
			link: window.location.href,
			imgUrl: ""
		});
	});
</script><!-- 微信自定义接口 -->

</head>

<body>

<div class="am-modal am-modal-alert" tabindex="-1" id="fq_alert">
  <div class="am-modal-dialog">
    <div class="am-modal-hd" id="fq_alert_title"></div>
    <div class="am-modal-bd" id="fq_alert_info">
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn">确定</span>
    </div>
  </div>
</div>

<div class="am-modal am-modal-confirm" tabindex="-1" id="fq_confirm">
  <div class="am-modal-dialog">
    <div class="am-modal-hd" id="fq_confirm_title"></div>
    <div class="am-modal-bd" id="fq_confirm_info"></div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-confirm>确定</span>
    </div>
  </div>
</div>

<script src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<div class="move">
    <header style="position:relative;z-index:999;background:#F54D23;">
    <a href="javascript:void(0);" onclick="back();" style="position:absolute;top:2px;color:#fff;width:45px;height:100%;padding-left:10px;font-size:25px;" class="am-inline-block am-text-middle am-icon-angle-left"><!-- <img src="/Public/assets/mobile/images/left.png" />--></a><div class="am-per-center am-text-center am-padding-vertical-sm" style="color:#fff;font-size:16px;">晒单广场</div>
</header>
<script>
    function back(){
        window.history.back();
    }
</script>
    <ul class="am-tabs-nav am-nav am-nav-tabs" id="nav2">
        <li class="am-active" style="padding-right:0;padding-left:0;"><a href="<?php  echo $this->createMobileUrl('sdindex',array('dluid'=>$dluid))?>">晒单广场</a></li> 
        <li style="padding-right:0;padding-left:0;"><a href="<?php  echo $this->createMobileUrl('sdmy',array('dluid'=>$dluid))?>">我的晒单</a></li>
        <!--li style="padding-right:0;padding-left:0;"><a href="/share/ranking.html">积分排行</a></li-->
        <li style="float:right;"><a class="am-fr am-text-sm am-padding-horizontal-xs top_refer" style="background-color:#FFF;border:.1rem solid #F3E7E3;padding-top:3px;padding-bottom:3px;margin-top:6px;margin-bottom:3px;" href="<?php  echo $this->createMobileUrl('sdadd',array('dluid'=>$dluid))?>">晒单发布</a>
        </li>
    </ul>
    <style>
        #nav2{
            margin:0;
        }
        #nav2 li{
            height:100%;
            padding:0 5px;
        }
        #nav2 li.am-active{
            border-bottom:.3rem solid #F54D23;
        }
        #nav2 li.am-active a{
            color:#F54D23;
        }
       #nav2 li a{
            border:0;
            padding:10px 7px 7px 7px;
            font-size:1.4rem;
            color:#3d0505;
        }
    </style>
    <div class="am-cf"></div>
    <?php  if($list=='') { ?>
    <div class="am-margin-horizontal-sm am-margin-top-sm am-text-center am-text-sm ">暂无晒单信息</div>
    <?php  } ?>
    <div class="am-text-sm am-padding-top-sm box" style="position:relative;z-index:1;">
        <ul>
          <?php  if(is_array($list)) { foreach($list as $l) { ?>
            <li class="">
                <div class="am-padding-horizontal-sm">
                    <img src="<?php  echo $l['avatar'];?>" alt="" class="am-circle am-margin-right-xs am-fl" style="width:40px;height:40px;margin-top:2px;">
                    <div class="info_box" style="position:relative;top:2px;">
                        <span><?php  echo mb_substr($l['nickname'],0,1,'utf-8')?>**</span>
                        <div class="praise_click am-fr" data-id="<?php  echo $l['id'];?>">
                            <!--i class="am-icon-thumbs-o-up"></i> <span class="praise_click_num">3</span-->
                        </div> 
                    </div>
                    <div class="" style="color:#8f8f8f;">
                        <span class="am-text-xs"><?php  echo date('Y.m.d',$l['createtime'])?></span>
                    </div>
                </div>
                <div class="am-cf"></div>
                <div class="am-margin-horizontal-sm">
                    <div class="am-margin-vertical-xs">
                        <?php  echo $l['evaluation'];?></div>
                                        <div class="image_show am-margin-top-xs am-gallery am-gallery-default" data-am-widget="gallery" data-am-gallery="{ pureview: true }" style="padding-left:0;margin-left:0;">
                                        <?php  $img=unserialize($l['image'])?>
                                        <?php  if(is_array($img)) { foreach($img as $v) { ?>
                                            <img src="<?php  echo tomedia($v)?>" style="width:90px;height:90px;" />
                                        <?php  } } ?>

                                        </div>
                    <div class="am-margin-top-xs star">
                        <div class="am-inline" style="margin-right:2px;">
                            <span>评分:</span>
                            <i style="margin-left:-1px;" class="am-icon-star"></i> 
                            <?php  if($l['pf']==2) { ?>
                            <i style="margin-left:-4px;" class="am-icon-star"></i> 
                            <?php  } else if($l['pf']==3) { ?>
                            <i style="margin-left:-4px;" class="am-icon-star"></i> 
                            <i style="margin-left:-4px;" class="am-icon-star"></i> 
                            <?php  } else if($l['pf']==4) { ?>
                            <i style="margin-left:-4px;" class="am-icon-star"></i> 
                            <i style="margin-left:-4px;" class="am-icon-star"></i> 
                            <i style="margin-left:-4px;" class="am-icon-star"></i> 
                            <?php  } else if($l['pf']==5) { ?>
                            <i style="margin-left:-4px;" class="am-icon-star"></i> 
                            <i style="margin-left:-4px;" class="am-icon-star"></i> 
                            <i style="margin-left:-4px;" class="am-icon-star"></i> 
                            <i style="margin-left:-4px;" class="am-icon-star"></i> 
                            <?php  } ?>
                            
                        </div>
                        <div class="am-inline">
                            <span style="margin-left:-3px;">到手价: <span class="am-text-sm" style="font-weight:400;color:#f54d23"><?php  echo $l['price'];?></span>元</span><span style="margin-left:4px;"><?php  if($l['jljf']<>'') { ?>奖励积分: <span class="am-text-sm"><?php  echo $l['jljf'];?></span><?php  } ?></span>
                        </div>
                    </div>
                </div>
                <div class="am-cf"></div>
            </li>
            <hr data-am-widget="divider" style="margin:10px;color:#f3e7e3;" class="am-divider am-divider-solid" />
            <?php  } } ?>


        </ul>
        <?php  echo $pager;?>
    </div>
</div>
<div class="menu">
        <ul class="am-avg-sm-3 am-text-center am-padding-top-xs">
            <li class="am-vertical-align">
                <a href="<?php  echo $this->createMobileUrl('index',array('dluid'=>$dluid))?>">
                    <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style2/images/home-page-act.png" class="am-text-center am-vertical-align-middle"/>
                    <br />               
                    <span class=" am-text-center am-vertical-align-middle">首页</span>
                </a>
            </li>
            <li  class="am-vertical-align">
                <a href="<?php  echo $this->createMobileUrl('sdindex',array('dluid'=>$dluid))?>">
                    <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style2/images/Inordertoshare-unact.png" class="am-text-center am-vertical-align-middle" />
                    <br />
                    <span class=" am-text-center am-vertical-align-middle">晒单广场</span>
                </a>
            </li>
            <li  class="am-vertical-align">
                <a href="<?php  echo $this->createMobileUrl('member',array('dluid'=>$dluid))?>">
                    <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style2/images/per-center-unact.png" class="am-text-center am-vertical-align-middle" />
                    <br />
                    <span class=" am-text-center am-vertical-align-middle">用户中心</span>
                </a>
            </li>
        </ul>
    </div><style>
.menu{
        width:100%;
        position:absolute;
        position:fixed;

        bottom:0;
        background:#fff;
        border-top:.1rem solid #F3E7E3;
        z-index:999;
    }
    .menu img {
        width:1.5rem;
        height:1.5rem;
        margin-bottom:.2rem;
    }

    .menu a {
        display:inline-block;
        color:#3d0505;

    }

    .menu a span {
        font-size:1.2rem;
    }
</style>
<div class="am-hide"></div>		
</body>
</html>
<style>
    .move{
        margin-bottom:49px;
        font-family:'Microsoft YaHei';
    }
    .nav.am-active{
        color:#F54D23;
    }
    .nav{
        color:#3d0505;
        display:inline-block;
    }
    .top_hr{
        margin:5px 0 10px;
        background-color:#f8f8f8;
        border:0;
        height:.5rem
    }
    .box ul{
        margin:0;
        padding:0;
        list-style:none;
    }
    .move .box ul li{
        padding:0;
        color:#3d0505;
    }
    .image_show img{
        margin-bottom:5px;
    }
    .star i{
        color:rgb(255,215,000);
    }

	.am-nav-tabs{
	border-bottom:0.1rem solid #f3e7e3;
}	

</style>
<script>
    function share_refer(){
        window.location.href = '/share/refer.html';
    }

    $('.praise_click').one('click',function(){
        //晒单id
        var me = $(this);
        var id = me.data('id');
        var praise_click_num = me.children('.praise_click_num');
        var num = parseInt(praise_click_num.text())+1;
        praise_click_num.text(num);
        me.children('i').attr('class','am-text-danger am-icon-thumbs-up');
        $.ajax({
            type:'post',
            dataType:'json',
            data:{"id":id},
            url:'/share/praiseclick.html',
            success:function(res){
            
            }
        });   
    });
</script>