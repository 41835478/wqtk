<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<title><?php  if($share['nickname']) { ?><?php  echo $share['nickname'];?>的<?php  if($bl['fzname']) { ?><?php  echo $bl['fzname'];?><?php  } else { ?>分站<?php  } ?> -<?php  } ?><?php  echo $views['title'];?></title>
<link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/css/style.css" rel="stylesheet" />
<link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/css/swipper.css" rel="stylesheet" />
<link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/css/preload.css" rel="stylesheet" />
<link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/css/loading.css" rel="stylesheet" />
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/jquery-1.7.2.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/clipboard.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/jweixin-1.0.0.js"></script>
<!-- 微信自定义接口 -->
<script>
var weid="<?php  echo $_W['uniacid'];?>";

</script>
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
			title: "【券后价：<?php  echo $views['price'];?>元】 <?php  echo $views['title'];?>",
			desc: "<?php  echo $views['title'];?>",
			link: window.location.href ,
			imgUrl: "<?php  echo tomedia($views['pic_url'])?>"
		}); 
		wx.onMenuShareTimeline({
			title: "【券后价：<?php  echo $views['price'];?>元】 <?php  echo $views['title'];?>",
			desc: "<?php  echo $views['title'];?>",
			link: window.location.href,
			imgUrl: "<?php  echo tomedia($views['pic_url'])?>"
		});
	});
</script>
<!-- 微信自定义接口 -->
<script>
        var deviceWidth = document.documentElement.clientWidth;
        if (deviceWidth > 750) deviceWidth = 750;
        document.documentElement.style.fontSize = deviceWidth / 7.5 + "px";
        document.documentElement.style.width = "100%";
    </script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/htool.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/asynloading.js"></script>
</head>
<body>
<script>
//采集宝贝详情的图片内容
    function getiteminfo(itemid) {
        var itemid="<?php  echo $views['num_iid'];?>";   
        $.ajax({
            url: "https://hws.m.taobao.com/cache/mtop.wdetail.getItemDescx/4.1/?data=%7Bitem_num_id%3A" + itemid + "%7D&type=jsonp&dataType=jsonp",
            dataType: 'jsonp',
            jsonp: 'callback',
            success: function (result) {
                if (result.ret[0] == "SUCCESS::接口调用成功") {
                    var len = result.data.images.length;
                    var image = '';
                    for (var i = 0; i < len; i++) {
                        image+= '<img src="' + result.data.images[i] + '">';
                    }      
                    $('.vipic').html(image);
                    
                } else {
                    $(".vipic").html("宝贝数据调用失败，原因：" + result.ret[0]);
                    $('.vipic').modal();
                }
            }
        });
    }
</script>
<!--二维码-->
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/js/layer_mobile/layer.js"></script>
<link href="<?php  echo $_W['siteroot'];?>/addons/tiger_taoke/template/mobile/js/layer_mobile/need/layer.css" rel="stylesheet" />

<script>
var cont="<div style='width:100%;'><div style='width:100%;font-size:16px;line-height:30px;height:30px;'><?php  echo $cfg['copyright'];?></div><div style='width:100%'><img src='<?php  echo tomedia($views['pic_url'])?>' style='width:100%'></div><div style='width:35%;float:left;' id='qrcode'><img src='<?php  echo $emw;?>' width='100%' height='100%'></div><div style='width:60%;float:left;padding-left:6px;padding-top:6px;'><span style='font-size:14px;text-align:left;width:100%;display:block;height:50px;overflow:hidden;line-height:25px;'><b><?php  echo $views['title'];?></b></span><span style='text-align:left;float: left;width: 100%;'>原价:<?php  echo $views['org_price'];?></span><span style='font-size:12px;color:#ff0000;text-align:left;width:100%;display:block;'>券后价¥<b style='font-size:18px;'> <?php  echo $views['price'];?></b></span></div><div style='float:left;width:100%;height:30px;line-height:30px;font-size:16px;'>屏幕截屏推荐给朋友</div></div>";
    
    function ewm(){
        layer.open({	
            content: cont,
            btn: '关闭'
        });
    }
    //$('#qrcode').qrcode({width:80,height:80,typeNumber: 0,correctLevel: 0,text: "<?php  echo $url;?>"});

</script>
<!---->
<style>
#tab1 img{
  width:100%;
}
.layui-m-layerchild h3 {
    height: 30px;
    line-height: 30px;
    font-size: 16px;
    font-weight: 200;
    border-radius: 5px 5px 0 0;
    text-align: center;
}
.layui-m-layercont {
    padding: 30px 20px;
    line-height: 22px;
    text-align: center;
    padding-top:0;
}
.layui-m-layerbtn {
    display: box;
    display: -moz-box;
    display: -webkit-box;
    width: 100%;
    height: 50px;
    line-height: 50px;
    font-size: 14px;
    border-top: 0;
    background-color: #F2F2F2;
}
.layui-m-layer0 .layui-m-layerchild {
    width: 80%;
    max-width: 640px;
}
</style>
<!--二维码结束-->
<a href="javascript:void(0);" onclick="history.go(-1);" style="position:fixed;top:15px;left:15px;z-index:99999">
	<img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style5/images/back.png" style="width:35px">
</a>
<a href="<?php  echo $this->createMobileUrl('index',array('dluid'=>$dluid))?>" style="position:fixed;top:15px;right:15px;z-index:99999">
<img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style5/images/home (1).png" style="width:35px">
</a>
<a href="javascript:" onclick="ewm();" style="position:fixed;top:65px;right:15px;z-index:99999">
<img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style5/images/zx.png" style="width:35px">
</a>

<div id="containter" class="container">
<div class="goodsopenview">
<div class="swiper-container">
<ul class="swiper-wrapper">
<li class="swiper-slide">
<a href="javascript:;">
<div class="allpreContainer">

<div class="inoutbg" style="background-image: url(<?php  echo tomedia($views['pic_url'])?>); background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;">
</div>
<img class="preloadbg" src-data="<?php  echo tomedia($views['pic_url'])?>" src="" loaded="false">
<div class="DSbg" style="background-size: cover; background-position: 50% 50%; background-repeat: no-repeat;">
</div>
</div>
</a>
</li>
</ul>
<div class="swiper-pagination"></div>
</div>
<div class="goodsname"><?php  echo $views['title'];?></div>
<div class="goodsprice">
<span class="trueprice"><span style="font-size:12px;">券后价</span> ¥<?php  echo $views['price'];?> <?php  if($views['org_price']) { ?><span style="font-size:12px;color:#555555;text-decoration:line-through; ">原价 ¥<?php  echo $views['org_price'];?></span><?php  } ?></span>
<!--if $cfg['mmtype']<>1-->
<?php  if($cfg['rxyjxs']==1) { ?><span class="baseprice"><em class="detailfanzi">约返</em><em class="detailfanmoney"><?php  echo $flyj;?><?php  echo $lx;?></em></span><?php  } ?>

</div>
<?php  if($scgoods) { ?>
<a class="goodscollection morecollection" data-id="<?php  echo $views['id'];?>" href="javascript:;">取消</a>
<?php  } else { ?>
<a class="goodscollection" data-id="<?php  echo $views['id'];?>" href="javascript:;">收藏</a>
<?php  } ?>
</div>

<style>
.q-wx {
    width: 100%;
    margin: 0 auto;
    padding-top:10px;
}
.f14 {font-size: 14px;}
.q-wx li {display: inline-block;
    margin-left:10px;
    width: 45%;
    height: 1.25rem;
    color: #f6fed0;
    margin-top:6px;
    position: relative;
    background-image: url("<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/images/quanbj.png");
    background-size: 100% 100%;
}
.f30 {
    font-size: 25px;
}
.q-wx li span {
    display: block;
    width: 1.8rem;
    text-align: center;
}
.q-wx li p {
    width: 1.8rem;
    height: .42rem;
    line-height: 1.2;
    text-align: center;
    overflow: hidden;
    position: absolute;
    left: .23333rem;
    bottom: .1rem;
    z-index: 99;
}
.q-wx li a {
    display: block;
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 101;
}
</style>
<?php  if($qlist[0]['quanid']) { ?>
<div class="q-wx">
       <ul>
          <?php  if(is_array($qlist)) { foreach($qlist as $v) { ?>
            <li>
              <span class="f30"><small class="f14">¥</small><?php  echo $v['price'];?></span>
              <p>满<?php  echo $v['man'];?>元<?php  echo $v['price'];?>元</p>
              <a href="<?php  echo $v['url'];?>"></a>
            </li>
          <?php  } } ?>
       </ul>
</div>
<?php  } ?>
<?php  if($share['id']) { ?>
<style>
.inimg{width:1.2rem;height:1.2rem;float:left;}
.inimgr{width:3rem;height:1.2rem;float:left;line-height:1.2rem;padding-left:10px}
</style>


<div class="goodsshow" style="padding:0.1rem;height:1.2rem;    margin-bottom: 10px;">
  <div class="inimg"><img src="<?php  echo preg_replace('/\/0$/', '/96', stripslashes($share['avatar']));?>" style="border-radius:50%;"></div>
  <div class="inimgr"> <?php  echo $share['nickname'];?>的<?php  if($bl['fzname']) { ?><?php  echo $bl['fzname'];?><?php  } else { ?>分站<?php  } ?> </div>
</div>
<?php  } ?>
<div class="goodsshow">
<a class="seemore"  onclick="getiteminfo()">
<span>图文详情(点击查看详细介绍)</span>
</a>
<div class="goodsdetail">


<script type="text/javascript">
    $(function () {
      var clipboard = new Clipboard(".taokaocopy", {
        text: function () {
          return $(".copybox1").val();
        }
      });

      clipboard.on('success', function (e) {
        //alert("链接已复制到剪贴板");
        $(".taokaocopy").html("<img src='../addons/tiger_taoke/template/mobile/tbgoods/style9/images/copy1.png'>");
      });

      clipboard.on('error', function (e) {
        //console.log(e);
        $(".taokaocopy").html("<img src='../addons/tiger_taoke/template/mobile/tbgoods/style9/images/copy2.png'>");
      })
    });
  </script>


<p>
<?php  echo $views['tjcontent'];?>
</p>
<div class="vipic">
  <div style="width:100%"></div>
</div>
<div style="width:100%;height:60px;"></div>
</div>
</div>
<style>
.iconfont {
  font-family:"iconfont" !important;
  font-size:16px;
  font-style:normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.bmenu{
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 50px;
    line-height: 50px;
    display: -webkit-box;
    z-index: 10000;
    background:#FAFAFA;
    color:#ffffff;
    font-size:12px;
}
.bnav{
position: absolute;
z-index:10001;
width:25%;float:left;}
.sb1{bottom:0;left:0;color:#666;text-align:center}
.sb2{bottom:0;left:25%;color:#666;text-align:center}
.sb3{bottom:0;left:50%;background: #FB874E;text-align:center}
.sb4{bottom:0;left:75%;background: #f54d23;text-align:center}
.iconfont1{width:22px;height:22px;
background-image: url("<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/images/sy.png");
background-size: 100% 100%;
position: absolute;
z-index:10001;
margin-top: 14px;
margin-left: -28px;
}
.iconfont2{width:22px;height:22px;
background-image: url("<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/images/kf.png");
background-size: 100% 100%;
position: absolute;
z-index:10001;
margin-top: 14px;
margin-left: -28px;
}
</style>
<script>
var dlewm="<?php  echo $dlewm;?>";
if(dlewm){
  var contkf="<div style='width:100%;'><div><img src='"+dlewm+"' width='100%' height='100%'></div><div style='float:left;width:100%;height:30px;line-height:30px;font-size:16px;'>扫码加客服咨询</div></div>";
}else{
  var contkf="<div style='width:100%;'><div><img src='<?php  echo tomedia($cfg['kfewm'])?>' width='100%' height='100%'></div><div style='float:left;width:100%;height:30px;line-height:30px;font-size:16px;'>扫码加客服咨询</div></div>";
}

    
    function kf(){
        layer.open({	
            content: contkf,
            btn: '关闭'
        });
    }
    //$('#qrcode').qrcode({width:80,height:80,typeNumber: 0,correctLevel: 0,text: "<?php  echo $url;?>"});

</script>
<div class="bmenu">
   <div class="bnav sb1"><a href="<?php  echo $this->createMobileUrl('index',array('dluid'=>$dluid))?>" style="color:#666"><i class="iconfont1"></i>首页</a></div>
   <div class="bnav sb2" onclick="kf()"><i class="iconfont2"></i>客服</div>
   <?php  if($cfg['llqtype']!=1) { ?>
   <div class="bnav sb3"><a style="color:white" href="<?php  echo $this->createMobileUrl('openview',array('dluid'=>$dluid))?>&link=<?php  echo $rhyurl;?>">浏览器打开</a></div>
   <?php  } ?>
   <div class="bnav sb4"><a href="javascript:;" class="goodsget" data-img="<?php  echo tomedia($views['pic_url'])?>" data-id="<?php  echo $views['id'];?>" data-title="<?php  echo $views['title'];?>" data-picurl="<?php  echo $views['pic_url'];?>" data-dluid="<?php  echo $dluid;?>" data-rxyjxs="<?php  echo $cfg['rxyjxs'];?>" data-url="<?php  echo $views['url'];?>" data-pid="<?php  echo $views['pid'];?>" data-tkrate="<?php  echo $views['tk_rate'];?>"  data-numiid="<?php  echo $views['num_iid'];?>" data-orgprice="<?php  echo $views['org_price'];?>" data-price="<?php  echo $views['price'];?>" coupons_price="<?php  echo $views['coupons_price'];?>" style="color:#ffffff;background: #f54d23;font-size:12px;font-weight: normal;letter-spacing: normal;">淘口令购买</a></div>
</div>
<!--div class="goodsgetcoupon"><a href="javascript:;" class="goodsget" data-img="<?php  echo tomedia($views['pic_url'])?>" data-id="<?php  echo $views['id'];?>" data-rxyjxs="<?php  echo $cfg['rxyjxs'];?>" style="color:#ffffff">马上领券<em class="ljmoney2" style="color:#ffffff"><?php  echo $views['coupons_price'];?></em>元</a></div-->
</div>

</body>
</html>
<style>
.copybox{text-align:left;}
</style>
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
    top: 1.8rem;
    z-index: 10000;
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

<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/idangerous.swiper.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/common_phone.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/fun.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/clipboard.min.js"></script>
<script>
//    $(function(){
//        
//        var id = $(".goodsget").data("id");
//            $.ajax({
//                type: "post",
//                url: "<?php  echo $this->createMobileUrl('GetCoupon')?>",
//                dataType: "json",
//                data: { commodityID: id },
//                success: function (data) {
//                alert(data.commission);
//                    $(".detailfanmoney").html(data.commission + "");
//
//                }
//            });
//            //getiteminfo(nnid);
//    })
    
    </script>
