<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <form action="" method="post" class="form-horizontal form">
    	<div class='panel panel-default'>
            <div class='panel-heading'>基础设置</div>
            <div class='panel-body'>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">员工注册审核</label>
           			<div class="col-sm-9">
                    	<label><input type="radio" name="reg_checked" value="0" checked="checked">人工审核</label>
                    	<label style="margin-left: 20px;"><input type="radio" name="reg_checked" value="1" <?php  if($settings['reg_checked']) { ?>checked<?php  } ?>>不用审核</label>
 					</div>
 				</div>
 				<?php  if($_W['account']['level'] == 4) { ?>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">二维码类型</label>
           			<div class="col-sm-9">
                    	<label><input type="radio" name="qrtype" value="0" checked="checked"> 临时二维码(无数量限制)</label>
                    	<label style="margin-left: 20px;"><input type="radio" name="qrtype" value="1" <?php  if($settings['qrtype']) { ?>checked<?php  } ?>> 永久二维码(10W数量限制)</label>
 					</div>
 				</div>
 				<?php  } ?>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">员工工号长度</label>
           			<div class="col-sm-9">
                    	<input type="number" name="alength" value="<?php  echo $settings['alength'];?>" class='form-control'>
                    	<div class="help-block">填0或者空，代表不限制</div>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">工号规则</label>
           			<div class="col-sm-9">
                    	<label><input type="radio" name="acc_rule" value="0" checked="checked"> 粉丝填写</label>
                    	<label style="margin-left: 20px;"><input type="radio" name="acc_rule" value="1" <?php  if($settings['acc_rule']) { ?>checked<?php  } ?>> 自动生成</label>
                    	<div class="help-block">自动生成：注册页面不显示工号填写，注册后自动生成工号，规则以工号长度为准</div>
                    	<div class="help-block">例如工号长度5，则以 10000 开始递增；注意，工号将作为关键字触发，请避免已有关键字和工号关键字相同(订阅号)</div>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">工号名称</label>
           			<div class="col-sm-9">
                    	<input type="text" name="acc_name" value="<?php  echo $settings['acc_name'];?>" class='form-control'>
                    	<div class="help-block">默认名称为工号</div>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">奖励类型</label>
           			<div class="col-sm-9">
                    	<select class="form-control" name="credit">
                    		<option <?php  if($settings['credit']=='credit1') { ?>selected<?php  } ?>>credit1</option>
                    		<option <?php  if($settings['credit']=='credit2') { ?>selected<?php  } ?>>credit2</option>
                    		<option <?php  if($settings['credit']=='credit3') { ?>selected<?php  } ?>>credit3</option>
                    		<option <?php  if($settings['credit']=='credit4') { ?>selected<?php  } ?>>credit4</option>
                    		<option <?php  if($settings['credit']=='credit5') { ?>selected<?php  } ?>>credit5</option>
                    	</select>
                    	<div class="help-block">员工邀请粉丝关注后获取的奖励；类型为系统积分类型，请参照<a target="_blank" href='./index.php?c=mc&a=credit&'>积分设置</a></div>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"> 推广粉丝要求</label>
                    <div class="col-sm-9 col-xs-12">
                         <label><input type="radio" name="fans_require" value="0" checked="checked"> 所有粉丝</label>
                         <label style="margin-left: 20px;"><input type="radio" name="fans_require" value="1" <?php  if($settings['fans_require'] == 1) { ?>checked<?php  } ?>> 新粉丝(已关注或取消关注无效)</label>
                         <div class="help-block">新粉丝以在系统粉丝表中是否有记录为准</div>
                    </div>
                </div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">员工推广奖励</label>
           			<div class="col-sm-9">
                    	<input type="number" name="invite_score" value="<?php  echo $settings['invite_score'];?>" class='form-control'>
                    	<div class="help-block">员工邀请粉丝关注后获取的奖励</div>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">取消关注扣除奖励</label>
           			<div class="col-sm-9">
                    	<input type="number" name="un_score" value="<?php  echo $settings['un_score'];?>" class='form-control'>
                    	<div class="help-block">员工推广粉丝取消关注后扣除员工奖励，不用带减号，不填则不扣</div>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">员工通过审核推送</label>
           			<div class="col-sm-9">
                    	<input type="text" name="checked_text" value="<?php  echo $settings['checked_text'];?>" class='form-control'>
                    	<div class="help-block">#员工#为员工名字；#链接#为个人中心链接；不填则不推送</div>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">推广统计规则</label>
           			<div class="col-sm-9">
                    	<label><input type="radio" name="un_rule" value="0" checked="checked"> 粉丝取消关注不计入推广数</label>
                    	<label style="margin-left: 20px;"><input type="radio" name="un_rule" value="1" <?php  if($settings['un_rule']) { ?>checked<?php  } ?>> 都计入推广数</label>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">粉丝取消关注推送</label>
           			<div class="col-sm-9">
                    	<input type="text" name="un_text" value="<?php  echo $settings['un_text'];?>" class='form-control'>
                    	<div class="help-block">粉丝取消关注后，推送通知推荐人；#昵称#为当前粉丝昵称；#奖励#为扣除的奖励；#总分#为员工总分；不填写则不推送</div>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">注册页面广告图</label>
           			<div class="col-sm-9">
                    	<?php  echo tpl_form_field_image('reg_adv',$settings['reg_adv'])?>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">首页滚动公告</label>
           			<div class="col-sm-9">
                    	<input type="text" name="notice" value="<?php  echo $settings['notice'];?>" class='form-control'>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">底部版权</label>
           			<div class="col-sm-9">
                    	<input type="text" name="copyright" value="<?php  echo $settings['copyright'];?>" class='form-control'>
 					</div>
 				</div>
 				<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">引导关注素材</label>
           			<div class="col-sm-9">
                    	<input type="text" name="describeurl" value="<?php  echo $settings['describeurl'];?>" class='form-control'>
 					</div>
 				</div>
 			</div>
 		</div>   
 		<div class="panel panel-default">
            <div class="panel-heading">
                扫码关注后立即推送文字：
            </div>
            <div class="panel-body">
            	<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">推荐人文字推送</label>
           			<div class="col-sm-9">
                    	<input type="text" name="invite_text" value="<?php  echo $settings['invite_text'];?>" class='form-control'>
                    	<div class="help-block">#昵称#为当前关注粉丝昵称，#今天#为今天推广数量；#总数#为总推广数量；不填写则不推送</div>
                    	<div class="help-block">#奖励#为推荐人当前获得奖励；#总分#为推荐人总奖励；不填写则不推送</div>
 					</div>
 				</div>
            	<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">关注粉丝文字推送</label>
           			<div class="col-sm-9">
                    	<input type="text" name="push_text" value="<?php  echo $settings['push_text'];?>" class='form-control'>
                    	<div class="help-block">#昵称#为当前粉丝昵称，#推荐#为当前推广人昵称；#工号#为推广人工号；#手机#为推广人手机号码；不填写则不推送</div>
                    	<div class="help-block">#链接#为开启需完善信息功能后，完善信息的链接</div>
 					</div>
 				</div>
 			</div>
 			<div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label"></label>
           			<div class="col-sm-9">
 					</div>
 				</div>
 		</div>
<button type="submit" name="submit" class="btn btn-primary" value="提交">提交</button>
<input type="hidden" name="token" value="<?php  echo $_W['token'];?>">
</form>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>