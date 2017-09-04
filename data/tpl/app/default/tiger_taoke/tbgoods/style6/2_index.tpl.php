<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
<title><?php  echo $cfg['copyright'];?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=yes;" />
<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style6/js/jquery-1.6.2.min.js"></script>
<link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style6/css/index.css?v=2.1" rel="stylesheet" type="text/css" />

  <script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
  <!-- 微信自定义接口 -->
<?php  if($views=='') { ?>
<script>
        var appid = "<?php  echo $_W['account']['jssdkconfig']['appId'];?>";
        var timestamp = "<?php  echo $_W['account']['jssdkconfig']['timestamp'];?>";
        var nonceStr = "<?php  echo $_W['account']['jssdkconfig']['nonceStr'];?>";
        var signature = "<?php  echo $_W['account']['jssdkconfig']['signature'];?>";
        wx.config({
            debug: false,
            appId: appid,
            timestamp: timestamp,
            nonceStr: nonceStr,
            signature: signature,
            jsApiList: [
                "onMenuShareAppMessage",
                "onMenuShareTimeline",
                "chooseImage",
                "uploadImage",
                "downloadImage"
            ]
        });

	wx.ready(function(){
		wx.onMenuShareAppMessage({
			title: "<?php  echo $cfg['fxtitle'];?>",
			desc: "<?php  echo $cfg['fxcontent'];?>",
			link: window.location.href ,
			imgUrl: "<?php  echo tomedia($cfg['fxpicurl'])?>"
		}); 
		wx.onMenuShareTimeline({
			title: "<?php  echo $cfg['fxtitle'];?>",
			desc: "<?php  echo $cfg['fxcontent'];?>",
			link: window.location.href ,
			imgUrl: "<?php  echo tomedia($cfg['fxpicurl'])?>"
		});
	});
</script>
<?php  } ?>
<!-- 微信自定义接口 -->    
</head>
<body>


    <div style="max-width:600px; margin:0 auto;position: relative;">
        <div class="yhq_ssk" style="    position: fixed;z-index:10001">
            <div class="ssk_qb">
                <a href="<?php  echo $this->createMobileUrl('index')?>">
                    <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style6/images/ssk_fl.png" width="20" height="30" align="absmiddle" /></a></div>
            <div class="ssk" style="position:fixed;left:10%;">
            <form id="search-form" action="<?php  echo $this->createMobileUrl('index')?>" method="get">
                <input type="hidden" name="i" value="<?php  echo $_W['uniacid'];?>">
                <input type="hidden" name="c" value="entry">
                <input type="hidden" name="m" value="tiger_taoke">
                <input type="hidden" name="do" value="index">
                <div class="ssk_fl">
                <style>
               .seek_btn {position: absolute;width: 40px; height: 30px;right: 0px;top: 0px;-webkit-box-sizing: border-box;border: 1px;border-radius: 3px;cursor: pointer;background-color:#FFF;}
                </style>
                    <input type="text" name="key"  autocomplete="off" value="<?php  if($_GPC['key']) { ?><?php  echo $_GPC['key'];?><?php  } ?>" placeholder=""/>
                    <button type="submit" id="key" onclick="document.getElementById('key').value=encodeURI(document.getElementById('key').value);getId('search').submit()" class="seek_btn" value="搜本站"><img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style6/images/ss_fd.png" /></button>
                    
                </div>
             </form> 
            </div>
            <div class="ssk_fx">
                <a href="javascript:showShareFC();">
                    <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style6/images/ssk_fr.png" width="20" height="30" align="absmiddle" /></a></div>
        </div>
        <div class="yhq_topsm">
            <ul>
                <li class="yhq_topsm_fl">
                    <div>
                        <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style6/images/nz.png" width="16" height="14" align="absmiddle" />&nbsp;内部优惠券，可与淘宝其他活动同时使用，数量有限！<br>
                    </div>
                </li>
                <li class="yhq_topsm_fr"></li>
            </ul>
        </div>
       
        
    
        <div class="sp_con" style="margin-top:15px;">
            <div class="cjf_con">
                <ul>
                <li onclick="javascript:window.location.href='<?php  echo $this->createMobileUrl('index')?>'" <?php  if($typeid=='') { ?> class="handon"<?php  } ?>>
                       <div class="cjf_ev">
                         <p <?php  if($typeid=='') { ?> class="active" <?php  } ?>>最新</p>
                       </div>
                    </li>
                <?php  if(is_array($fzlist)) { foreach($fzlist as $k=>$f) { ?>                    
                    <li onclick="javascript:window.location.href='<?php  echo $this->createMobileUrl('index',array('typeid'=>$f['id']))?>'" <?php  if($f['id']==$typeid) { ?> class="handon"<?php  } ?>>
                       <div class="cjf_ev">
                         <p <?php  if($f['id']==$typeid) { ?> class="active"<?php  } ?> ><?php  echo $f['title'];?></p>
                       </div>
                    </li>
                 <?php  } } ?> 
                 
                </ul>
                <div class="clear"></div>
            </div>
        </div>

    <!----->
    <?php  if($zdgoods) { ?>
    <link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style7/css/style.css" rel="stylesheet" />
    <link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style7/css/swipper.css" rel="stylesheet" />
    
    <div id="containter index_goods">
        <div class="contain-product relative" style="border-top:0">
            <div class="index_list_title">
               <span class="intro_title"><i>今日专享</i> <em>疯狂抢购</em></span>
               <!--span class="index_list_eachall"><a href="/Commodity/ListByCustomCategory?category=1">全部</a></span-->
            </div>
        <div class="contain--product-list swiper2"  style="width:100%;">
            <ul class="swiper-wrapper">
                <?php  if(is_array($zdgoods)) { foreach($zdgoods as $v) { ?>
                <li class="relative swiper-slide">
                    <div class="contain-prolist-in">
                        <a href="<?php  echo $this->createMobileUrl('view',array('id'=>$v['id']))?>" class="ImgOut">
                            <div class="allpreContainer">
                                <img style="height:146px;width:146px;" src="<?php  echo tomedia($v['pic_url'])?>_240x240.jpg" >
                            </div>
                        </a>
                        <div class="contain-prolist-text">
                            <h1><a href="<?php  echo $this->createMobileUrl('view',array('id'=>$v['id']))?>"><?php  echo $v['title'];?></a></h1>
                            <h2>
                                <span>&yen;<?php  echo $v['price'];?></span>
                                <font>&yen;<?php  echo $v['org_price'];?></font>
                            </h2>
                        </div>
                        <a href="javascript:;" class="new-coupon" data-img="<?php  echo tomedia($v['pic_url'])?>_240x240.jpg" data-id="<?php  echo $v['id'];?>"><span>领劵</span><span>立减<?php  echo $v['coupons_price'];?>元</span></a>
                    </div>
                </li>
                <?php  } } ?>
            </ul>
         </div>
       </div>
    </div>
    <?php  } ?>
   <!-----> 


    
        <section class="goods" id="pageCon" style="padding-bottom:60px;">
   
          <div id="list_box" class="list_box">
              
          </div>
          <div id="list_more" class="loading" style="margin-top:10px;text-align:center">
           <span onclick="get_list(0);">查看更多</span>
         </div>
        </section>
    </div>

<!---->
<link rel="stylesheet" href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style5/css/style_v3.css">
<div class="nav_box">
     <nav class="nav" id="nav">
      <ul class="">
       <li><a <?php  if($tj=='') { ?>class='active'<?php  } ?> href="<?php  echo $this->createMobileUrl('index')?>" target="_self"><em class="icon icon-jz"></em><span>首页</span><em class="line"></em></a></li>
       <li><a <?php  if($tj==1) { ?>class='active'<?php  } ?> href="<?php  echo $this->createMobileUrl('index',array('tj'=>1))?>" target="_self"><em class="icon icon-jk"></em><span>9.9专场</span><em class="line"></em></a></li>
       <li><a <?php  if($tj==2) { ?>class='active'<?php  } ?> href="<?php  echo $this->createMobileUrl('index',array('tj'=>2))?>" target="_self"><em class="icon icon-sjk"></em><span>19.9专场</span><em class="line"></em></a></li>
        <?php  if($cfg['huiyuanurl']) { ?>
        <li class="_border"><a href="<?php  echo $cfg['huiyuanurl'];?>" target="_self"><em class="icon icon-yg"></em><span>个人中心</span><em class="line"></em></a></li>
        <?php  } else { ?>
       <li class="_border"><a href="<?php  echo $this->createMobileUrl('member')?>" target="_self"><em class="icon icon-yg"></em><span>个人中心</span><em class="line"></em></a></li>
       <?php  } ?>
      </ul>
     </nav>
</div>
<!---->



<link rel="stylesheet" href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style5/css/dropload.css">
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style5/js/dropload.min.js"></script>
<script type="text/javascript">

var limit = 1;
function get_list(ty){
    
    if(ty==1){
	   $("#pageCon .list_box").html('');
	}else{
	   $("#list_more").html('<div class="loading"><span > 卖命加载中...</span></div>');	   
	}
	
	$.ajax({
	    type : "post",
	    url : "<?php  echo $this->createMobileUrl('indexpost')?>"+"&tj=<?php  echo $tj;?>&key=<?php  echo $key;?>&typeid=<?php  echo $typeid;?>",
	    data : {
	    	limit:limit,
	    },
        dataType : "json",		
	    success : function(data) {
        //alert("<?php  echo $key;?>");
	    	if(data.status==1){
						var list = data.content;
						var content = '';
						for(var i=0; i<list.length; i++){

        content+='<a href="<?php  echo $this->createMobileUrl("view")?>'+'&id='+list[i]['id']+'">'
        content +='<div class="yhj" onclick="javascript:window.location.href=<?php  echo $this->createMobileUrl("view")?>'+'&id='+list[i]['id']+'">';
            content +='<div class="yhj_l"><img src="'+list[i]['pic_url']+'_240x240.jpg" width="85" height="85" /></div>';
            content +='<div class="yhj_m">';
        content +='<div class="title">';
 if(list[i]['istmall']==1){
        content +='<span><img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style6/images/tm.png" width="40" ';
 }else{
        content +='<span><img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style6/images/tb.png" width="40" ';
 }
        content +='height="40"/></span>&nbsp;<font class="title2">'+list[i]['title']+'</font>';
                content +='</div>';
                content +='<div class="mes">现 价 <span class="gr">￥'+list[i]['org_price']+'</span>';
                content +='<br>优惠券 <span class="red">￥'+list[i]['coupons_price']+'</span>';
                content +='</div>';
            content +='</div>';
            content +='<div class="yhq_img"><img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style6/images/yhj_m.jpg" ';content +='width="12" height="95"/></div>';
            content +='<div class="yhj_r">￥'+parseInt(list[i]['price'])+'<br><span>券后价</span></div>';
        content +='</div>';
        content +='</a>';



						}
                        $("#pageCon .list_box").append(content);
						var aa = $(".goods-list li").innerWidth();
                        $(".goods-list li img").css('height',aa);
						if(list.length>1){
							$("#list_more").html('<span onclick="get_list(0);">点击查看更多</span>');
						}else{
							$("#list_more").html('<span></span>');
							$("#list_more").fadeOut(500);
						}		
	                    limit++;

		    }else if(data.status==2){
	    		$("#list_more").html('<span>没有更多记录！</span>');
				//dialog("没有更多记录！");
				$("#list_more").fadeOut(500);

	    	}else{
			    $("#list_more").html('<span>没有更多记录！</span>');
				//dialog("没有更多记录！！");
				$("#list_more").fadeOut(500);
			}    	
	    },
	    error : function(xhr, type) {

	    }
	});
	    

}
get_list(0);


//==============自动加载=============
//获取滚动条当前的位置 
function getScrollTop() { 
var scrollTop = 0; 
if (document.documentElement && document.documentElement.scrollTop) { 
scrollTop = document.documentElement.scrollTop; 
} 
else if (document.body) { 
scrollTop = document.body.scrollTop; 
} 
return scrollTop; 
} 

//获取当前可是范围的高度 
function getClientHeight() { 
var clientHeight = 0; 
if (document.body.clientHeight && document.documentElement.clientHeight) { 
clientHeight = Math.min(document.body.clientHeight, document.documentElement.clientHeight); 
} 
else { 
clientHeight = Math.max(document.body.clientHeight, document.documentElement.clientHeight); 
} 
return clientHeight; 
} 

//获取文档完整的高度 
function getScrollHeight() { 
return Math.max(document.body.scrollHeight, document.documentElement.scrollHeight); 
} 


$(window).scroll(function () { 
if (getScrollTop() + getClientHeight() == getScrollHeight()) { 
//alert("到达底部"); 
get_list(0);
} 
});

//==============自动加载=============  


</script>
    
    <div class="fc_share">
        <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style6/images/fx_fc.png" style="width:80%"/>
    </div>
    <div class="fc_share_bg"></div>
    
    <script type="text/javascript">
        
        $(function($){
            $('.fc_share_bg').click(function(){
                $('.fc_share').hide();
                $('.fc_share_bg').hide();
            });
            $('.fc_share').click(function(){
                $('.fc_share').hide();
                $('.fc_share_bg').hide();
            });
        });
        
        function showShareFC(){
            
            $('.fc_share').show();
            $('.fc_share_bg').show();
            
        }
        
    </script>

<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/jquery-1.7.2.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/tool.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/asynloading.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/idangerous.swiper.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/common_phone.js"></script>
<?php  if($cfg['lbtx']==1) { ?>
<style>
.useract {
    position: fixed;
    opacity: 0;
    color: #fff;
    border-radius: 20px;
    height: 30px;
    line-height: 30px;
    font-size: 12px;
    left: 0.2rem;
    padding-right: 10px;
    top: 3rem;
    z-index: 2000;
    background: #000;
}

.useract img {
    width: 30px;
    height: 30px;
    border-radius: 18px;
    vertical-align: -10px;
    margin-right: 8px;
}

.useractshow {
    opacity: 0.8;
    transition: all 0.3s;
    -webkit-transition: all 0.3s;
}
</style>

<script>

var fixeddata = [
<?php  if(is_array($msg)) { foreach($msg as $v) { ?>
    {
        name: "<?php  echo $v['title'];?>",
        content: "<?php  echo $v['content'];?>",
        headerportarit: "<?php  echo tomedia($v['picurl'])?>"
    },
<?php  } } ?>

];
</script>
<?php  } ?>

<script>        
      var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                loop: true,
                effect:'flip',
                autoplay:5000,
            });
      var swiper2 = new Swiper('.swiper2', {
                slidesPerView: 'auto',
                paginationClickable: true,
                freeMode: true,
                autoplay:3000,
                pagination: '.swiper-pagination',
                
      });


//弹出领券
    $(document).delegate(".new-coupon,.goodsget", "click", function () {        
        var $this = $(this);
        //alert($this.attr("data-img"));
        var id = $this.data("id");
        $.ajax({
            type: "post",
            url: "<?php  echo $this->createMobileUrl('GetCoupon')?>",
            dataType: "json",
            data: { id: id },
            success: function (data) {
                if (data.msg == "申请失败") {
                    popTao($this.attr("data-img"), "淘口令", "您暂无权限领取该优惠券，请先升级会员");
                    $(".taokaobox").html("<div class='popwcc'><a href='javascript:;' onclick='location.href=\"/Customer/Upgrade\"' class='popwcomfirm'>去升级</a></div>");
                    //location.href = "/Customer/Upgrade";
                }
                else {
                    popTao($this.attr("data-img"), "淘口令", data.url);
                }
                selection()
            }
        });
    })
    </script>
</body>
</html>
