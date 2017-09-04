<?php defined('IN_IA') or exit('Access Denied');?><!doctype html>
<html class="no-js">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
<title><?php  echo $goods_info['title'];?></title>

<link rel="stylesheet" type="text/css" href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/goods/style1/css/amazeui.css"/>
<link rel="stylesheet" type="text/css" href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/goods/style1/css/style.css?t=4" />

<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/goods/style1/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/goods/style1/js/fastclick.js"></script>
<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/goods/style1/js/amazeui.min.js"></script>
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

<link rel="stylesheet" href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/goods/style1/css/integralmall.css" />
<!-- modal start -->
    <div class="am-modal am-modal-confirm" tabindex="-1" id="fq_true_confirm">
      <div class="am-modal-dialog">
        <div class="am-modal-hd" id="fq_true_confirm_title"></div>
        <div class="am-modal-bd" id="fq_true_confirm_info"></div>
        <div class="am-modal-footer">
            <span class="am-modal-btn" data-am-modal-cancel class="cancel">取消</span>
            <span class="am-modal-btn" data-am-modal-confirm>确定</span>      
        </div>
      </div>
    </div>
    <!-- modal end -->
    <div class="am-bd">
                <div data-am-widget="gallery" data-am-gallery="{  pureview: 'true' }">
        <img src="<?php  echo tomedia($goods_info['logo'])?>" alt="" class="detailpic"/>
        </div>
        <a onclick="window.history.back();" class="am-inline">
            <img src="http://yitao.m.baikexing.cn/Public/assets/mobile/images/return.png" class="am-return am-margin-top-sm am-margin-left-sm" />
        </a>
        
        <div class=" am-display am-padding-top-xs am-padding-horizontal-sm am-margin-bottom-xs">
            <span><strong  class="line-clamp am-padding-bottom-xs"><?php  echo $goods_info['title'];?></strong></span>
            <div class="number am-padding-vertical-xs">
                <span class="credit"><?php  if($cfg['hztype']<>'') { ?><?php  echo $cfg['hztype'];?><?php  } else { ?>积分<?php  } ?>：<span class="integral-fraction am-credit"><?php  echo $goods_info['cost'];?></span></span>
                <span class="am-fr price">市场价：¥<span class="am-price"> <?php  echo $goods_info['price'];?></span></span>
                <br />
                <div class="am-num">
                    <span><span class="am-convert"><?php  echo $requestsum;?></span>人兑换</span>
                    <span class="am-fr"><span class="am-stock"><?php  echo $goods_info['amount'];?> </span>库存</span>
                </div>
                <div class="am-num">
                    活动时间：<?php  echo date('Y.m.d',$goods_info['starttime'])?> - <?php  echo date('Y.m.d',$goods_info['endtime'])?>          </div>
                 <?php  if($goods_info['type']==9) { ?>
                <div class="am-num" style="font-size:20px;color:#ff0000">返现：<?php  echo $goods_info['fxprice'];?>元</div>
                <?php  } ?>
            </div>
            <?php  if($goods_info['type']<>1) { ?>
            <div class="am-now am-vertical-align">
                <span class="am-vertical-align-middle">我的积分：</span>
                <span class="integral-fraction am-vertical-align-middle myscore"><?php  echo $fans['credit1'];?></span>
                <button class="am-btn am-direct am-radius am-padding-horizontal-sm am-padding-vertical-xs am-margin-top-xs am-vertical-align-middle am-fr virtual_order"  data-id="<?php  echo $goods_info['goods_id'];?>">立即兑换</button>
            </div>
            <?php  } ?>

        </div>
        <?php  if($goods_info['type']==1) { ?>
        <!--实物电话号码-->
        <div class="am-margin-vertical-sm am-padding-vertical-sm fq-background-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);margin:10px;">
                <div class="step_one am-text-sm am-margin-left-sm">
                    <strong> 请认真填写联系方式：</strong>
                </div>
                <div class="am-margin-top-sm  am-margin-horizontal-sm">
                    <div class="fq-goods-border am-text-center am-margin-top-sm am-padding-vertical-sm am-padding-horizontal-sm">
                        <div class="am-form-group">
                            <label for="doc-ipt-3" class="am-u-sm-3 am-form-label" style="line-height:40px;">姓名</label>
                            <div class="am-u-sm-9">
                              <input type="text" placeholder="输入您的姓名" name='realname' value="" id='realname' style="width:99%;border:#cecece solid 1px;height:40px;line-height:40px;">
                            </div>
                        </div>
                        <div style="clear:both"></div>       
                        <div class="am-form-group">
                            <label for="doc-ipt-3" class="am-u-sm-3 am-form-label" style="line-height:40px;">手机号</label>
                            <div class="am-u-sm-9">
                              <input type="text" placeholder="输入您的手机号" name='mobile' value="" id='mobile' style="width:99%;border:#cecece solid 1px;height:40px;line-height:40px;">
                            </div>
                        </div>
                        <div style="clear:both"></div>       
                        <div class="am-form-group">
                            <label for="doc-ipt-3" class="am-u-sm-3 am-form-label" style="line-height:40px;">地址</label>
                            <div class="am-u-sm-9">
                              <input type="text" placeholder="输入您的地址" name='residedist' value="" id='residedist' style="width:99%;border:#cecece solid 1px;height:40px;line-height:40px;">
                            </div>
                        </div>
                        <div style="clear:both"></div>                       
                    </div>
                </div>
        </div>
        <div class="am-margin-vertical-sm am-padding-vertical-sm fq-background-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);margin:10px;">
           <div class="am-now am-vertical-align" style="padding-left:10px;padding-right:10px;">
                <span class="am-vertical-align-middle">我的积分：</span>
                <span class="integral-fraction am-vertical-align-middle myscore"><?php  echo $fans['credit1'];?></span>
                <button class="am-btn am-direct am-radius am-padding-horizontal-sm am-padding-vertical-xs am-margin-top-xs am-vertical-align-middle am-fr virtual_order"  data-id="<?php  echo $goods_info['goods_id'];?>">立即兑换</button>
                
            </div>
        </div>
        <?php  } ?>
        <?php  if($goods_info['type']==9) { ?>
        <!--第一步 淘口令-->
        <div class="am-margin-vertical-sm am-padding-vertical-sm fq-background-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);margin:10px;">
                <div class="step_one am-text-sm am-margin-left-sm">
                    <strong> 第一步（复制淘口令）：</strong>
                </div>
                <div class="am-margin-top-sm  am-margin-horizontal-sm">
                    <div class="fq-goods-border am-text-center am-margin-top-sm am-padding-vertical-sm am-padding-horizontal-sm">
                        <div class="fq-explain  am-center am-text-center">
                            <span class="am-padding-horizontal-xs fq-nowrap fq-background-white">长按 > 全选 > 复制</span>
                        </div>
                        <span id="copy_key_ios4" class="fq-abstract-color " style="color:#ff0000">复制框内整段文字，打开「手机淘宝」即可「浏览宝贝」并购买<?php  echo $goods_info['taokouling'];?></span>
                        <textarea style="display: none;" id="copy_key_android4" type="text" class="am-form-field am-text-center am-text-xs fq-abstract-color " oninput="regain4();">复制框内整段文字，打开「手机淘宝」即可「浏览宝贝」并购买<?php  echo $goods_info['taokouling'];?></textarea>
                    </div>
                </div>
        </div>
        <!---->

        <!--第二步 淘口令-->
        <div class="am-margin-vertical-sm am-padding-vertical-sm fq-background-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);margin:10px;">
                <div class="step_one am-text-sm am-margin-left-sm">
                    <strong> 第二步（购买成功提交订单号审核返现）：</strong>
                </div>
                <div class="am-margin-top-sm  am-margin-horizontal-sm">
                    <div class="fq-goods-border am-text-center am-margin-top-sm am-padding-vertical-sm am-padding-horizontal-sm">
                        <div class="am-form-group">
                            <label for="doc-ipt-3" class="am-u-sm-3 am-form-label" style="line-height:40px;">淘宝订单号</label>
                            <div class="am-u-sm-9">
                              <input type="text" placeholder="输入你的订单号" name='tborder' value="" id='tborder' style="width:99%;border:#cecece solid 1px;height:40px;line-height:40px;">
                            </div>
                        </div>
                        <div style="clear:both"></div>                       
                    </div>
                </div>
        </div>
        <!---->
        <div class="am-margin-vertical-sm am-padding-vertical-sm fq-background-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);margin:10px;">
           <div class="am-now am-vertical-align" style="padding-left:10px;padding-right:10px;">
                <span class="am-vertical-align-middle">我的积分：</span>
                <span class="integral-fraction am-vertical-align-middle myscore"><?php  echo $fans['credit1'];?></span>
                <button class="am-btn am-direct am-radius am-padding-horizontal-sm am-padding-vertical-xs am-margin-top-xs am-vertical-align-middle am-fr virtual_order"  data-id="<?php  echo $goods_info['goods_id'];?>">立即兑换</button>
                
            </div>
        </div>
        <?php  } ?>

        <!--第三步 淘口令-->
        <!--div class="am-margin-vertical-sm am-padding-vertical-sm fq-background-white" style="box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);margin:10px;">
                <div class="step_one am-text-sm am-margin-left-sm">
                    <strong>订单复制流程</strong>
                </div>
                <div class="am-margin-top-sm  am-margin-horizontal-sm">
                    <div class="fq-goods-border am-text-center am-margin-top-sm am-padding-vertical-sm am-padding-horizontal-sm">
                        <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/goods/style1/images/1.jpg" style="width:100%">
                        <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/goods/style1/images/2.jpg" style="width:100%">
                        <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/goods/style1/images/3.jpg" style="width:100%">
                        <img src="<?php  echo tomedia($cfg['kfewm'])?>" style="width:100%">
                        <Br>联系客服
                        <div style="clear:both"></div>                       
                    </div>
                </div>
        </div-->
        <!---->

           <div class="am-tabs am-padding-horizontal-sm"  data-am-tabs>
            <ul class="am-tabs-nav am-nav am-nav-tabs">
            <?php  if($goods_info['type']<>9) { ?>
                <li class="am-active am-detail"  style="height:36px"><a href="#tab1">商品详情</a></li>
            <?php  } ?>
                <li class="am-recoding"   style="height:36px"><a href="#tab2">兑换记录</a></li> 
            </ul>

    <div class="am-tabs-bd">
        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
            <div class="am-padding-top-sm" style="width:100%;overflow:auto;">
              
                <?php  echo htmlspecialchars_decode($goods_info['content'])?>          
            </div>        
         </div>
        <div class="am-tab-panel am-fade" id="tab2">
          <?php  if(is_array($request)) { foreach($request as $r) { ?>
            <ul class="am-avg-sm-2 am-margin-bottom-sm am-padding-top-sm list_len">
                <li class=" am-vertical-align" style="height:36px">
                   <?php  if($r['avatar']) { ?>
                   <img class="am-portrait  am-round am-fl" src="<?php  echo $r['avatar'];?>" />
                   <?php  } else { ?>
                   <img class="am-portrait  am-round am-fl" src="http://wx.qlogo.cn/mmopen/AbLJ7EqhfqjiaaLC2Zl6DJSgFSOpSRDPIhbuP2hnATEotINBxdsLTwmvlvmxDpnKQmuOqTzic7mZWB2tKWHXTrXJ9Pwcl4G6lW/0" />
                   <?php  } ?>

                   <span class="am-vertical-align-middle am-padding-left-sm am-id"><?php  echo mb_substr($r['from_user_realname'],0,1,'utf-8')?>…</span>
                </li>
                <li class="am-vertical-align am-text-right" style="height:36px">
                    <span class="am-vertical-align-middle am-center am-time"><?php  echo date('Y.m.d H:i:s',$r['createtime'])?></span>
                </li>
            </ul>
          <?php  } } ?>

            <!--a class="am-radius am-padding-horizontal-sm am-padding-vertical-xs am-margin-top-xs am-vertical-align-middle am-fl get_more" data-id="662" data-page="1" data-count="8">查看更多...</a-->
            <div class="am-margin-vertical" style="display:none;width:100%;text-align:center;">该商品暂无兑换记录</div>
        </div>
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
                    <span class=" am-text-center am-vertical-align-middle">会员中心</span>
                </a>
            </li>
        </ul>
    </div>
    <style>
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
</div>

    <style>
        header {
            background: url("http://yitao.m.baikexing.cn/assets/i/commodity.jpg") no-repeat;
            min-height: 32rem;
            background-size: cover;
        }

        .am-return {
            width:2.8rem;
            height:2.8rem;
            position: absolute;
            top: 0;
            left: 0;
        }
        .detailpic{
            position: relative;
            width:100%;
        }

        .number {
            border-bottom: .1rem solid #f3e7e3;
        }

        .am-now {
            height: 4rem;
        }

            .am-now a:hover,
            .am-now a:focus {
                color: white;
            }

        strong{
            border-bottom: .1rem solid #f3e7e3;
        }

        .line-clamp {
                -webkit-line-clamp: 2;
            line-height: 1.6rem;
            max-height: 3.5rem;
        }

        li {
            height:3rem;
        }
        #tab1 img{
            max-width: 100%;
        }

    </style>
<div class="am-hide"></div>		
</body>
</html>
<script>
 $(function () {

        //事件监听
        //------------------------------------------
        document.addEventListener("selectionchange", function (e) {
            if (window.getSelection().anchorNode.parentNode.id == 'copy_key_ios' && document.getElementById('copy_key_ios').innerText != window.getSelection()) {
                var key = document.getElementById('copy_key_ios');
                window.getSelection().selectAllChildren(key);
            }
            if (window.getSelection().anchorNode.parentNode.id == 'copy_key_ios1' && document.getElementById('copy_key_ios1').innerText != window.getSelection()) {
                var key = document.getElementById('copy_key_ios1');
                window.getSelection().selectAllChildren(key);
            }
            if (window.getSelection().anchorNode.parentNode.id == 'copy_key_ios2' && document.getElementById('copy_key_ios2').innerText != window.getSelection()) {
                var key = document.getElementById('copy_key_ios2');
                window.getSelection().selectAllChildren(key);
            }
            if (window.getSelection().anchorNode.parentNode.id == 'copy_key_ios3' && document.getElementById('copy_key_ios3').innerText != window.getSelection()) {
                var key = document.getElementById('copy_key_ios3');
                window.getSelection().selectAllChildren(key);
            }
            if (window.getSelection().anchorNode.parentNode.id == 'copy_key_ios4' && document.getElementById('copy_key_ios4').innerText != window.getSelection()) {
                var key = document.getElementById('copy_key_ios4');
                window.getSelection().selectAllChildren(key);
            }
        }, false);

    });
$(function(){
	$('.virtual_order').click(function(){
		var score=$('.am-credit').text();
        var tborder=$('#tborder').val();
        var lbtype="<?php  echo $goods_info['type'];?>";
       
       if(lbtype==1){
         var realname=$('#realname').val();
         var mobile=$('#mobile').val();
         var residedist=$('#residedist').val();
         if(realname==''){
            $("#fq_alert_info").html("请填写姓名");
            $('#fq_alert').modal();
            return false;
         }
         if(mobile==''){
            $("#fq_alert_info").html("请填写手机号");
            $('#fq_alert').modal();
            return false;
         }
         if(residedist==''){
            $("#fq_alert_info").html("请填写地址");
            $('#fq_alert').modal();
            return false;
         }
       
       }
        

        var inventory=parseInt($('.am-stock').text());
        if(tborder==''){
            $("#fq_alert_info").html("请填写淘宝订单号");
            $('#fq_alert').modal();
            return false;
        }
        /*if(tborder.match(/^\d{16}$/) == null){
                $('#fq_alert_info').text('亲，订单号为16位的数字哦！');
                $('#fq_alert').modal({});
                not_scroll();
                return false;
            }*/
        if(inventory<=0){
            $("#fq_alert_info").html("抱歉，该商品暂时缺货哦！");
            $('#fq_alert').modal();
            return false;
        }
		$("#fq_true_confirm_info").text('亲，兑换将扣除“'+score+'”积分');
            $('#fq_true_confirm').modal({
                    relatedTarget: this,
                    onConfirm: function() {
                        $('.virtual_order').html('兑换中 <i class="am-icon-spinner am-icon-spin"></i>');
                        $('.virtual_order').prop('disabled',true);
                    	var score=$('.am-credit').text();
                        var goods_id=$(this.relatedTarget).data('id');
                        var typea="<?php  echo $goods_info['type'];?>";
                        var datas={"goods_id":goods_id,'score':score,'typea':typea,'tborder':tborder};
                        if(lbtype==1){
                           datas={"goods_id":goods_id,'score':score,'typea':typea,'tborder':tborder,'realname':realname,'mobile':mobile,'residedist':residedist};
                        }

                        $.ajax({
                            type:'post',
                            url:"<?php  echo $this->createMobileUrl('Goodpost')?>",
                            data:datas,
                            dataType:'json',
                            success:function(data){
                               if(data.success==1){
                                $('.virtual_order').html('兑换成功');
                               	$("#fq_confirm_info").text('亲，兑换成功');
            					$('#fq_confirm').modal({
			                    relatedTarget: this,
				                    onConfirm: function() {
				                    	window.location.href = "<?php  echo $this->createMobileUrl('request')?>";
				                    },
			                	});
                               }else if(data.success==0){
                                    $("#fq_alert_info").html(data.msg);
                                    $('#fq_alert').modal();
                                    $('.virtual_order').html('立即兑换');
                                    $('.virtual_order').prop('disabled',false);
                               }else{
                                    //$("#fq_alert_info").html("亲，兑换失败,请刷新再试哦");
                                    $("#fq_alert_info").html(data.msg);
                                    $('#fq_alert').modal();
                                    $('.virtual_order').html('立即兑换');
                                    $('.virtual_order').prop('disabled',false);
                               }
                            }
                        });
                    },
            });
	});
//处理时间戳
function get_time(time){
    var timeDate = new Date(time*1000);
    var year = timeDate.getFullYear();
    var month = timeDate.getMonth()+1;
    var day = timeDate.getDate();
    var hour = timeDate.getHours();
    var minute = timeDate.getMinutes();
    var second = timeDate.getSeconds();

    if(month<10)
    month = '0'+month;
    if(day<10)
    day = '0'+day;
    if(hour<10)
    hour = '0'+hour;
    if(minute<10)
    minute = '0'+minute;
    if(second<10)
    second = '0'+second;

    var date = year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second;
    return date;

}
$('#tab2').on('click','.get_more',function(){
    var prizeid=$(this).data('id');
    var page=$('.get_more').attr('data-page');
	$('.get_more').html('Loading...');
    $.ajax({
        type:'post',
        url:"/integralmall/ex_recoding.html",
        data:{"prizeid":prizeid,'page':page,},
        dataType:'json',
        success:function(data){
            if(data.status==1){
             var len = data.score_list.length;
             if(len>0){
                var html='';
                for(var i=0;i<len;i++){
                    html+='<ul class="am-avg-sm-2 am-margin-bottom-sm am-padding-top-sm list_len"><li class=" am-vertical-align" style="height:36px"><img class="am-portrait  am-round am-fl" src="'+data['score_list'][i]['headimgurl']+'" /><span class="am-vertical-align-middle am-padding-left-sm am-id">'+data['score_list'][i]['nickname']+'</span></li><li class="am-vertical-align am-text-right" style="height:36px"><span class="am-vertical-align-middle am-center am-time">'+get_time(data['score_list'][i]['addtime'])+'</span></li></ul>';
                }
                $('.get_more').before(html);
				var count=$('.get_more').attr('data-count');
				var list_len=$('.list_len').length;
				if(list_len<count){
					$('.get_more').attr('data-page',data.page);
					$('.get_more').html('查看更多...');		
				}else{
					$('.get_more').html('');
					$('.get_more').attr('data-page','');
					$('.get_more').addClass('am-hide');
				}
                
             } 
            }
        }     

    });
});
$('.am-now').on('click','.check_score',function(){
    var id=$(this).attr('data-id');
    var deduct_score=parseInt($(this).attr('data-score'));
    var myscore=parseInt($('.myscore').text());
    var inventory=parseInt($(this).attr('data-inventory'));
    if(inventory>0){
        if(myscore>=deduct_score){
            window.location.href = "/Exchangestep/exchangestep/id/"+id+'.html';
        }else{
            $("#fq_alert_info").html("亲，兑换该商品您的积分不够哦！");
            $('#fq_alert').modal();
        }
    }else{
        $("#fq_alert_info").html("抱歉，该商品暂时缺货哦！");
        $('#fq_alert').modal();
    }
    
});
});

</script>