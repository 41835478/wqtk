<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html lang="en" class="app">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>微信淘宝客-后台管理</title>	
	<!--[if lt IE 9]> 
	<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/public/js/ie/html5shiv.js" cache="false"></script> 
	<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/public/js/ie/respond.min.js" cache="false"></script> 
	<script src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/public/js/ie/excanvas.js" cache="false"></script> 
	<![endif]-->
    <script type="text/javascript">
	if(navigator.appName == 'Microsoft Internet Explorer'){
		if(navigator.userAgent.indexOf("MSIE 5.0")>0 || navigator.userAgent.indexOf("MSIE 6.0")>0 || navigator.userAgent.indexOf("MSIE 7.0")>0) {
			alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
		}
	}
	window.sysinfo = {
		<?php  if(!empty($_W['uniacid'])) { ?>'uniacid': '<?php  echo $_W['uniacid'];?>',<?php  } ?>
		<?php  if(!empty($_W['acid'])) { ?>'acid': '<?php  echo $_W['acid'];?>',<?php  } ?>
		<?php  if(!empty($_W['openid'])) { ?>'openid': '<?php  echo $_W['openid'];?>',<?php  } ?>
		<?php  if(!empty($_W['uid'])) { ?>'uid': '<?php  echo $_W['uid'];?>',<?php  } ?>
		'siteroot': '<?php  echo $_W['siteroot'];?>',
		'siteurl': '<?php  echo $_W['siteurl'];?>',
		'attachurl': '<?php  echo $_W['attachurl'];?>',
		'attachurl_local': '<?php  echo $_W['attachurl_local'];?>',
		'attachurl_remote': '<?php  echo $_W['attachurl_remote'];?>',
		<?php  if(defined('MODULE_URL')) { ?>'MODULE_URL': '<?php echo MODULE_URL;?>',<?php  } ?>
		'cookie' : {'pre': '<?php  echo $_W['config']['cookie']['pre'];?>'},
		'account' : <?php  echo json_encode($_W['account'])?>
	};
	</script>
    <link rel="stylesheet" href="./resource/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/public/style/css/common.css" >
    <link rel="stylesheet" href="./resource/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/public/style/css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/public/style/css/style.min.css" type="text/css" />
    <script>var require = { urlArgs: 'v=20160921' };</script>
	<script type="text/javascript" src="./resource/js/lib/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="./resource/js/app/util.js?v=20160921"></script>
	<script type="text/javascript" src="./resource/js/app/common.min.js?v=20160921"></script>
	<script type="text/javascript" src="./resource/js/require.js?v=20160921"></script>
	<script type="text/javascript" src="./resource/js/app/config.js?v=20160921"></script>
</head>
<body>
	<section class="vbox">
       <!--头部开始-->
		<header class="bg-black dk header navbar navbar-fixed-top-xs">
		    <div class="navbar-header aside-md"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav"> <i class="fa fa-bars"></i> </a> <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/public/images/logo.png" style="max-height: 30px;" class="m-r-sm"></a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a> </div>
		    <ul class="nav navbar-nav hidden-xs">
		      <li class="dropdown"> 
		      	<a href="<?php  echo $this->createWebUrl('index')?>" > <i class="fa fa-building-o"></i> 控制面版</a>
		      </li>
		      <li class="dropdown" > 
		      	<a href="<?php  echo $this->createWebUrl('mposter')?>"  > <i class="fa fa-comment-o"></i> 海报管理</a>
		      </li>
		      <li class="dropdown"> 
		      	<a href="<?php  echo $this->createWebUrl('goods', array('op' => 'display'));?>"> <i class="fa fa-building-o"></i> 积分商城</a>
		      </li>
               <li class="dropdown"> 
		      	<a href="<?php  echo $this->createWebUrl('tbgoods', array('op' => 'display'));?>"> <i class="fa fa-building-o"></i> 淘客商品</a>
		      </li>
               <li class="dropdown"> 
		      	<a href="../index.php?c=site&a=entry&op=sign-credit&do=signmanage&m=we7_coupon" target="_blank"> <i class="fa fa-building-o"></i> 积分签到</a>
		      </li>
              <li class="dropdown"> 
		      	<a href="<?php  echo $this->createWebUrl('share');?>"> <i class="fa fa-building-o"></i> 会员管理</a>
		      </li>
              <li class="dropdown"> 
		      	<a href="<?php  echo $this->createWebUrl('gfhuodong');?>"> <i class="fa fa-building-o"></i> 官方活动</a>
		      </li>


              

              

		    </ul>
		    <ul class="nav navbar-nav navbar-right hidden-xs nav-user" style="margin-right:10px;">
		      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="<?php  echo $_W['siteroot'];?>addons/tiger_taoke/public/images/avatar.jpg"> </span> <?php  echo $_W['account']['name'];?><b class="caret"></b> </a>
		        <ul class="dropdown-menu animated fadeInRight">
		          <span class="arrow top"></span>
                  <li><a href="<?php  echo url('user/profile/profile');?>" target="_blank"><i class="fa fa-weixin fa-fw"></i> 我的账号</a></li>
				  <?php  if($_W['role'] == 'founder') { ?>
                  <li class="divider"></li>
                  <li><a href="<?php  echo url('system/welcome');?>" target="_blank"><i class="fa fa-sitemap fa-fw"></i> 系统选项</a></li>
                  <li><a href="<?php  echo url('system/welcome');?>" target="_blank"><i class="fa fa-cloud-download fa-fw"></i> 自动更新</a></li>
                  <li><a href="<?php  echo url('system/updatecache');?>" target="_blank"><i class="fa fa-refresh fa-fw"></i> 更新缓存</a></li>
                  <li class="divider"></li>
                  <?php  } ?>
                  <li><a href="<?php  echo url('user/logout');?>"><i class="fa fa-sign-out fa-fw"></i> 退出系统</a></li>
		        </ul>
		      </li>
		    </ul>
		</header>
		<!--头部结束-->
        <style>
        #dndArea{height:300px}
        .webuploader-container{margin-bottom:100px;}
        </style>

        