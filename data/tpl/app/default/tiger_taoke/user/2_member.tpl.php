<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
    <title>会员中心</title>
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
        
<div class="person-top back-w">
    <div class="person-top-infor person-pad border-bottom">
        <a href="<?php  echo $this->createMobileUrl('useredit',array('id'=>$member['id'],'dluid'=>$dluid))?>" class="persmess">
            <div class="person-head"><img src="<?php  echo preg_replace('/\/0$/', '/96', stripslashes($fans['avatar']));?>"></div>
            <div class="person-top-text">
                <h1><?php  echo $fans['nickname'];?></h1>
                <h2><?php  if($mc['credit1']) { ?><?php  echo $mc['credit1'];?><?php  } else { ?>0<?php  } ?></h2>
            </div>
        </a>
            <!--a href="" class="bevip">开通VIP</a-->
    </div>
    <?php  if($cfg['fxkg']==1) { ?>
    <?php  if($cfg['fxtype']==2) { ?>
    <?php  if($cfg['txtype']==2 || $cfg['txtype']==3) { ?>
    <div class="usertx"><span class="userpointer" style="font-size:16px;"><?php  if($cfg['yetype']) { ?><?php  echo $cfg['yetype'];?><?php  } else { ?>余额<?php  } ?>：<?php  if($mc['credit2']) { ?><?php  echo $mc['credit2'];?><?php  } else { ?>0.00<?php  } ?></span><span onclick='txpost()'>马上提现</span><div class="arrow"></div></div>
    <?php  } else { ?>
    <div class="usertx"><span class="userpointer" style="font-size:16px;"><?php  if($cfg['yetype']) { ?><?php  echo $cfg['yetype'];?><?php  } else { ?>余额<?php  } ?>：<?php  if($mc['credit2']) { ?><?php  echo $mc['credit2'];?><?php  } else { ?>0.00<?php  } ?></span><span class="usergotx" >马上提现</span><div class="arrow"></div></div>
    <?php  } ?>
    <?php  } ?>
    <div class="usertopnav">
        <div class="usertopnavheader">
            <span>我的订单</span>
            <a href="<?php  echo $this->createMobileUrl('addorder',array('op'=>'qb','dluid'=>$dluid))?>"></a>
            <div class="arrow"></div>
        </div>
        <ul>
            <li>
                    <a href="<?php  echo $this->createMobileUrl('addorder',array('op'=>'add','dluid'=>$dluid))?>">
                        <h1 class="user01"></h1>
                        <p>添加订单</p>
                    </a>
                </li>
                <li>
                    <a href="<?php  echo $this->createMobileUrl('orderlist',array('op'=>'qb','dluid'=>$dluid))?>">
                        <h1 class="user02"></h1>
                        <p>全部订单</p>
                    </a>
                </li>
                <li>
                    <a href="<?php  echo $this->createMobileUrl('orderlist',array('op'=>'df','dluid'=>$dluid))?>">
                        <h1 class="user03"></h1>
                        <p>待返</p>
                    </a>
                </li>
                <li>
                    <a href="<?php  echo $this->createMobileUrl('orderlist',array('op'=>'yf','dluid'=>$dluid))?>">
                        <h1 class="user04"></h1>
                        <p>已返</p>
                    </a>
                </li>
        </ul>
    </div>
<?php  } ?>

</div>


<div class="person-list back-w">
    <ul>
        <li>
            <a href="<?php  echo $this->createMobileUrl('mfan1',array('uid'=>$fans['uid'],'dluid'=>$dluid))?>" style="background-image: url(<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/images/user01.png);">
                我的伙伴
            </a>
            <div class="arrow"></div>
        </li>
        <?php  if($cfg['qiandaourl']) { ?>
        <li>
            <a href="<?php  echo $cfg['qiandaourl'];?>" style="background-image: url(<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/images/user01.png);">
                每日签到
            </a>
            <div class="arrow"></div>
        </li>
        <?php  } ?>

        <?php  if($cfg['sdguangc']) { ?>
        <li>
            <a href="<?php  echo $this->createMobileUrl('sdindex',array('dluid'=>$dluid))?>" style="background-image: url(<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/images/a2.png);">
                有奖晒单
            </a>
            <div class="arrow"></div>
        </li>
        <?php  } ?>


        <li>
            <a href="<?php  echo $this->createMobileUrl('records',array('pid'=>$pid,'dluid'=>$dluid));?>" style="background-image: url(<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/images/a4.png);">
                我的<?php  if($cfg['hztype']) { ?><?php  echo $cfg['hztype'];?><?php  } else { ?>积分<?php  } ?>
            </a>
            <div class="arrow"></div>
        </li>
        <?php  if($cfg['jfscurl']) { ?>
        <li>
            <a href="<?php  echo $cfg['jfscurl'];?>" style="background-image: url(<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/images/a3.png);">
               <?php  if($cfg['hztype']) { ?><?php  echo $cfg['hztype'];?><?php  } else { ?>积分<?php  } ?>商城
            </a>
            <div class="arrow"></div>
        </li>
        <?php  } ?>
        
       <?php  if(is_array($fzlist)) { foreach($fzlist as $v) { ?>
        <li>
            <a href="<?php  echo $v['wlurl'];?>"  style="background-image: url(<?php  echo tomedia($v['picurl'])?>);">
                <?php  echo $v['title'];?>
            </a>
            <div class="arrow"></div>
        </li>
        <?php  } } ?>
      

        <!--li>
            <a href="/Customer/AccountRecord" class="userlist03">
                资金明细
            </a>
            <div class="arrow"></div>
        </li>
        <li>
            <a href="/Customer/Qr" class="userlist04">
                码上赚钱
            </a>
            <div class="arrow"></div>
        </li>
        <li>
            <a href="/FAQ" class="userlist05">
                常见问题
            </a>
            <div class="arrow"></div>
        </li-->
    </ul>
</div>

</div>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('newbottom', TEMPLATE_INCLUDEPATH)) : (include template('newbottom', TEMPLATE_INCLUDEPATH));?>

<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/jquery-1.7.2.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/tool.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/asynloading.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/idangerous.swiper.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/common_phone1.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/user/js/fun.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/js/layer_mobile/layer.js"></script>
<style>
.zfbbot{
display: inline-block;
    vertical-align: top;
    margin: 0 10px 10px 0;
    height: 36px;
    line-height: 36px;
    border-radius: 3px;
    padding: 0 30px;
    background-color: #FF4351;
    color: #fff;
    border: none;
    font-size:16px
}
.layui-m-layercont{padding:10px 10px;}
.in{
    display: block;
    width: 7.1rem;
    margin: 5px auto;
    padding-left: 15px;
    border: 1px solid #f0f0f0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    height: 45px;
    font-size: 16px;
    line-height: 40px;
    border-radius: 5px;
}
</style>
<script>

  function txpost(){
     layer.open({
        title: [
          '支付宝(集分宝)提现',
          'background-color: #fff; color:#888;height:40px;line-height:40px;font-size:16px;border-bottom: 1px solid #f0f0f0;'
        ]
        ,content: "<div style='height:auto'><input type='text' name='zfbuid' id='zfbuid' class='in' value='' placeholder='请输入支付宝帐号' style='width:100%;font-size:14px;'></div><div style='height:20px;color:#ff0000'><?php  if($cfg['txtype']==2) { ?>输入正确的支付宝帐号，防止提现失败<?php  } else { ?><?php  if($mc['credit2']<>0) { ?>本次可提现<?php  echo intval($mc['credit2'])*100?>个集分宝<?php  } else { ?>暂不能提现<?php  } ?><?php  } ?></div><div style='height:45px;margin-top:10px;'><button onclick='zfbpost();' type='button' class='zfbbot'>提交审核</button></div>"
      });
  }


  function zfbpost(){
     var zfbuid = $('#zfbuid').val();
        if(zfbuid ==''){
            alert('请输入支付宝帐号');
        }
        $.ajax({
            type: "post",
            url: "<?php  echo $this->createMobileUrl('tixianpost')?>",
            dataType: "json",
            data:{"zfbuid":zfbuid},
            success: function (data) {
                if (data.statusCode == "200") {
                    alert("提现成功,客服会在24小时内审核发放！请耐心等待！");
                    window.location.reload();
                }
                else {
                    alert(data.message);
                }
            }
        });

  }

/*动效弹出框*/
function popwindow(title, content) {

    var pop;
    if (!document.querySelector(".popw")) {
        var popw = document.createElement("div");
        document.body.appendChild(popw);
        popw.className = "popw";
        popw.innerHTML = "<div class='popwbg'></div><div class='popwbox'><div class='popwtitle'></div><div class='popwcontent'></div><div><div class='popwcc'><a href='javascript:;' class='popwcancel'>取消</a><a href='javascript:;' class='popwcomfirm tixiancomfirm'>确定</a></div></div></div>"
        canclepopw();
    }
    $(".popwtitle").html(title);
    $(".popwcontent").html(content);

    pop = document.querySelector(".popw")
    pop.style.display = "-webkit-box";
    $(".popwbox").addClass("popwboxshow");
    $(".tixiancomfirm").click(function () {  
        
        $.ajax({
            type: "post",
            url: "<?php  echo $this->createMobileUrl('tixianpost')?>",
            dataType: "json",
            success: function (data) {
                if (data.statusCode == "200") {
                    alert("提现成功,客服会在24小时内审核发放！请耐心等待！");
                    window.location.reload();
                }
                else {
                    alert(data.message);
                }
            }
        });

    })
}
</script>
<style>

</style>
</body>
</html>
