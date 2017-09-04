<?php defined('IN_IA') or exit('Access Denied');?>
		<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_head', TEMPLATE_INCLUDEPATH)) : (include template('public_head', TEMPLATE_INCLUDEPATH));?>
		<!--中间内容开始-->
		<section>
		    <section class="hbox stretch">
		    <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_left', TEMPLATE_INCLUDEPATH)) : (include template('public_left', TEMPLATE_INCLUDEPATH));?>
		    <!--右边框架-->
			  <section id="content">
			    <section class="vbox">
			        <section class="scrollable padder"  style="padding-bottom:50px;">
                        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                          <li><a href="###"><i class="fa fa-home"></i> 首页  </a></li>
                          <li class="active">会员管理</li>
                        </ul>
			            <!--编辑内容-->
                       <ul class="nav nav-tabs">
	<!--li <?php  if($operation == 'post') { ?>class="active"<?php  } ?>><a href="<?php  echo $this->createWebUrl('goods', array('op' => 'post'));?>">添加</a></li-->
	<li class="active"><a href="<?php  echo $this->createWebUrl('hymember');?>">会员管理</a></li>
</ul>
<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php  echo $item['id'];?>">
<div class="panel panel-default">
   <div class="panel-heading">
      编辑
   </div>
   <div class="panel-body">

     <div class="form-group">
        <label class="col-sm-2 control-label">粉丝</label>
        <div class="col-sm-9 col-xs-12">
            <img src="<?php  echo $item['avatar'];?>" style="width:50px;height:50px;padding:1px;border:1px solid #ccc">
            <?php  echo $item['nickname'];?>    </div>
     </div>
     <div class="form-group">
        <label class="col-sm-2 control-label">OPENID</label>
        <div class="col-sm-9 col-xs-12">
            <div class="form-control-static"><?php  echo $item['from_user'];?></div>
        </div>   
    </div>
     <div class="form-group">
        <label class="col-sm-2 control-label">注册时间</label>
        <div class="col-sm-9 col-xs-12">
            <div class="form-control-static"><?php  echo date('Y-m-d H:i:s',$item['createtime'])?></div>
        </div>   
    </div>

    <div class="form-group">
        <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信号</label>
        <div class="col-sm-9 col-xs-12">
                <input type="text" name="weixin" class="form-control valid" value="<?php  echo $item['weixin'];?>" />
                <span class="help-block"></span>
        </div>
     </div>
     <div class="form-group">
        <label class="col-xs-12 col-sm-3 col-md-2 control-label">手机号</label>
        <div class="col-sm-9 col-xs-12">
                <input type="text" name="tel" class="form-control valid" value="<?php  echo $item['tel'];?>" />
                <span class="help-block"></span>
        </div>
     </div>
     <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启查券</label>
            <div class="col-xs-12 col-sm-9">
                <label class="radio-inline"><input type="radio" name="cqtype" value="0" 
                 <?php  if($item['cqtype']==0) { ?> checked="checked" <?php  } ?>>否</label>
                <label class="radio-inline"><input type="radio" name="cqtype" value="1"
                 <?php  if($item['cqtype']==1) { ?> checked="checked" <?php  } ?>>是</label>
                  <span class="help-block"></span>
            </div>
     </div>


     <div class="form-group">
        <label class="col-xs-12 col-sm-3 col-md-2 control-label">上级ID</label>
        <div class="col-sm-9 col-xs-12">
                <input type="text" name="helpid" class="form-control valid" value="<?php  echo $item['helpid'];?>" />
                <span class="help-block">请不要随便修改</span>
        </div>
     </div>
     
     <div class="form-group">
			<div class="col-sm-10">
				<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" /> <input
					name="submit" value="submit" type="hidden" />
				<hr />
				<button class="btn btn-primary" type="submit">提交</button>
			</div>
		</div>

   </div>
</div>
</form>


                        <!--编辑内容结束-->
			        </section>
			        <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public_bottom', TEMPLATE_INCLUDEPATH)) : (include template('public_bottom', TEMPLATE_INCLUDEPATH));?>
			    </section>
			    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
			  </section>
			  <aside class="bg-light lter b-l aside-md hide" id="notes">
			       <div class="wrapper">不知道放什么</div>
			  </aside>
			<!--右边框架结束-->
			</section>
		  </section>
		<!--中间内容结束-->
	</section>


</body>
</html>