<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<title>我的信息</title>
<link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/css/style.css" rel="stylesheet" />
<link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/css/swipper.css" rel="stylesheet" />
<link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/css/preload.css" rel="stylesheet" />
<link href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/css/loading.css" rel="stylesheet" />
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
<div id="containter" class="container">
<div class="user_toptip">*恶意填写，公司有权冻结您的账户</div>
<div class="personData">
<form id="form_info">
<ul>
<li class="headerportrait">
<span><?php  echo $fans['nickname'];?></span>
<div class="personData-pic">
<img src="<?php  echo preg_replace('/\/0$/', '/96', stripslashes($fans['avatar']));?>">
</div>
<div class="arrow"></div>
</li>
<li>
<span>会员编号</span>
<span class="userdataname"><?php  echo $member['id'];?></span>
</li>
<!--li>
<span>会员等级</span>
<span class="userdataname">省钱</span>
</li-->
<li>
<span><em class="mustmhao">*</em>微信号<em class="mustt">(必填)</em></span>
<span class="userdataname userdatanamewx"><input type="text" name="weixin" value="<?php  echo $member['weixin'];?>" placeholder="请输入微信号" class="user_wx"></span>
</li>
<li>
<span><em class="mustmhao">*</em>手机号码<em class="mustt">(必填)</em></span>
<span class="userdataname userdatanamephone"><input type="text" name="tel" value="<?php  echo $member['tel'];?>" placeholder="请输入手机号码" class="user_phone"></span>
</li>
</ul>
</form>
<input type="button" id="btn_submit" class="flow-btn" value="确认" />
</div>
</div>
</body>
</html>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/jquery-1.7.2.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/idangerous.swiper.min.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/common_phone.js"></script>
<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/template/mobile/tbgoods/style9/js/fun.js"></script>
<script>
        $(function () {
               val1 = $(".user_wx").val();
                val2 = $(".user_phone").val();
            if(val1!='' && val2!=''){
                $(".user_wx,.user_phone").on("input", function () {
                    var val1, val2;
                    val1 = $(".user_wx").val();
                    val2 = $(".user_phone").val();
                    console.log(val1, val2);
                    if (val1 != "" && val2 != "" && /^\d{11}$/.test(val2)) {
                        $(".nobtn").addClass("flow-btn").removeClass("nobtn");
                    } else {
                        $(".flow-btn").removeClass("flow-btn").addClass("nobtn");
                    }
                })
            }

            $(document).delegate(".flow-btn", "click", function () {
                val1 = $(".user_wx").val();
                val2 = $(".user_phone").val();
               if(!val1){
                 alert('请正确输入微信号');
                 return;
               }
               if(!val2){
                 alert('请输入11位手机号码');
                 return;
               }
               var myreg=/^\d{11}$/;
               if(!myreg.test(val2)){
                 alert('请输入正确的手机号码');
                 return;
               }
                $.ajax({
                    type: "post",
                    url: "<?php  echo $this->createMobileUrl('useredit',array('id'=>$member['id']))?>",
                    data: $("#form_info").serialize(),
                    async: false,
                    dataType: "json",
                    success: function (result) {
                        if (result.statusCode == 200) {
                            alert("操作成功");
                            if ("" == "") {
                                window.location.href = "<?php  echo $this->createMobileUrl('useredit',array('id'=>$member['id']))?>";
                            }
                            else {
                                window.location.href = "<?php  echo $this->createMobileUrl('useredit',array('id'=>$member['id']))?>";
                            }
                        }
                        else {
                            alert(result.message);
                        }
                    }
                });
            });
        });
    </script>