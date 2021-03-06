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
                          <li><a href="index.html"><i class="fa fa-home"></i> 首页  </a></li>
                          <li class="active">积分商城</li>
                        </ul>
			            <!--编辑内容-->
                        <?php  if($operation == 'post') { ?>

<div class="panel panel-default">
   <div class="panel-heading">
      <h3 class="panel-title">
       添加/编辑奖品
      </h3>
   </div>
   <div class="panel-body">
        <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">奖品名称</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="title" value="<?php  echo $item['title'];?>"  placeholder="奖品名称">
            </div>
          </div>
          <!--div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">自定义角标：</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="hot" value="<?php  echo $item['hot'];?>"  placeholder="热卖">
            </div>    
          </div>
          <div class="form-group">
                <label class="col-xs-12 col-sm-3 col-md-2 control-label">角标颜色</label>
                <div class="col-sm-9 col-xs-12">
                    <?php  echo tpl_form_field_color('hotcolor',$item['hotcolor'])?>
                </div>
            </div-->
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">排序</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="px" value="<?php  echo $item['px'];?>"  placeholder="请输入数字">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">奖品类型</label>
            <div class="col-sm-10">
                <div class="input-group">
                <select class="form-control" name="type">
                    <!--option <?php  if(!empty($item) && $item['type'] == 0) { ?>selected<?php  } ?> value="0">支付宝(粉丝只需填写支付宝)</option-->
                    <option <?php  if(!empty($item) && $item['type'] == 1) { ?>selected<?php  } ?> value="1">实物礼品(邮寄)</option>
                    <!--option <?php  if(!empty($item) && $item['type'] == 2) { ?>selected<?php  } ?> value="2">充值卡（话费，流量等方式）</option>
                    <option <?php  if(!empty($item) && $item['type'] == 3) { ?>selected<?php  } ?> value="3">自领礼品(线下O2O店员核销)</option>
                    <option <?php  if(!empty($item) && $item['type'] == 4) { ?>selected<?php  } ?> value="4">第三方优惠券链接(如：有赞优惠券)</option-->
                    <option <?php  if(!empty($item) && $item['type'] == 5) { ?>selected<?php  } ?> value="5">兑换红包</option>
                    <!--option <?php  if(!empty($item) && $item['type'] == 6) { ?>selected<?php  } ?> value="6">商品外链(链接到其它的模块的)</option-->
                    <!--option <?php  if(!empty($item) && $item['type'] == 7) { ?>selected<?php  } ?> value="7">微信卡券(下面填写微信卡券ID)</option-->
                    <!--option <?php  if(!empty($item) && $item['type'] == 8) { ?>selected<?php  } ?> value="8">APP任务类型</option-->
                    <option <?php  if(!empty($item) && $item['type'] == 9) { ?>selected<?php  } ?> value="9">淘客商品</option>
                </select>                
                </div>
            </div>
          </div>
          <!-- 是否自动审核-->
				<div class="form-group">
					<label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
					<div class="col-sm-9">
						<label class="radio-inline">
							<input type="radio" name="shtype" value="1" <?php  if($item['shtype'] == '1') { ?>checked="true"<?php  } ?>> 自动发送
						</label>
						<label class="radio-inline">
							<input type="radio" name="shtype" value="0" <?php  if($item['shtype'] == '0') { ?>checked="true"<?php  } ?>>人工审核
						</label>
						<span class="help-block">红包设置自动兑换红包和工人审核红包</span>
					</div>
				</div>

          <!--APP链接
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">下载APP链接</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="appurl" value="<?php  echo $item['appurl'];?>"  placeholder="">
              <span class="help-block">填写APP下载链接</span>
            </div>
          </div>-->

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">淘客返现</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="fxprice" value="<?php  echo $item['fxprice'];?>"  placeholder="">
              <span class="help-block">购买提交单订单号返现多少钱</span>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">淘口令</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="taokouling" value="<?php  echo $item['taokouling'];?>"  placeholder="">
              <span class="help-block">最好是用二合一淘口令</span>
            </div>
          </div>


          <!----
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">微信卡券ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="cardid" value="<?php  echo $item['cardid'];?>"  placeholder="填写微信卡券ID，请到微信公众后查看">
              <span class="help-block">粉丝营销-> 微信卡券添加</span>
            </div>
          </div-->
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">奖品图片</label>
            <div class="col-sm-10">
              <?php  echo tpl_form_field_image('logo',$item['logo'])?>
            </div>
          </div>
          <!--div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">外链地址</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="wl_link" value="<?php  echo $item['wl_link'];?>"  placeholder="这里填写其它模块的链商品链接地址,http:// 开头)">
            </div>
          </div-->
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">兑奖总上限</label>
            <div class="col-sm-10">
             <div class="input-group">
                 <input type="text" class="form-control" name="per_user_limit" value="<?php  echo $item['per_user_limit'];?>"  placeholder="单用户兑奖个数上限">
                <span class="input-group-addon">次</span>
              </div>               
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">1天兑奖上限</label>
            <div class="col-sm-10">
             <div class="input-group">
                 <input type="text" class="form-control" name="day_sum" value="<?php  echo $item['day_sum'];?>"  placeholder="单用户1天内兑奖上限（从0点开始计算）">
                <span class="input-group-addon">次</span>
              </div>               
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">奖品数量</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="amount" value="<?php  echo $item['amount'];?>"  placeholder="此设置项设置该奖品剩余奖品数。小于0时不对外显示，不接受兑换。">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">开始时间</label>
            <div class="col-sm-10">
              <?php  echo tpl_form_field_date('starttime',$item['starttime'],true)?>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">结束时间</label>
            <div class="col-sm-10">
              <?php  echo tpl_form_field_date('endtime',$item['endtime'],true)?>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">奖品价格</label>
            <div class="col-sm-10">
              
              <div class="input-group">
                <input type="text" class="form-control" name="price" value="<?php  echo $item['price'];?>"  placeholder="奖品实际价格(红包模式最低1元起--最高200元)">
                <span class="input-group-addon">元</span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">消耗积分</label>
            <div class="col-sm-10">
                <div class="input-group">
                <input type="text" class="form-control" name="cost" value="<?php  echo $item['cost'];?>"  placeholder="兑换消耗积分数">
                <span class="input-group-addon">积分</span>
                </div>
                 <span class="help-block"></span>
            </div>
          </div>        

          <!--div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">第三方优惠券</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="dj_link" value="<?php  echo $item['dj_link'];?>"  placeholder="这里写第三方优惠券的链接(如：有赞优惠券，上面奖品类型需要选择第三方链接，如果不是，就不用写)">
            </div>
          </div-->

          

          <!--div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">发放奖励方式</label>
            <div class="col-sm-10">
               <label for="type0" class="radio-inline"><input type="radio" name="type" value="0" id="type0"  <?php  if(!empty($item) && $item['type'] == 0) { ?>checked="true"<?php  } ?> />填写支付宝地址</label>
               <label for="type1" class="radio-inline"><input type="radio" name="type" value="1" id="type1"  <?php  if(!empty($item) && $item['type'] == 1) { ?>checked="true"<?php  } ?> />填写收货地址</label>
               <label for="type2" class="radio-inline"><input type="radio" name="type" value="2" id="type2" <?php  if(empty($item) || $item['type'] == 2) { ?>checked="true"<?php  } ?> />只填手机号码（话费，流量等方式）</label>
               <span class="help-block">兑换话费等虚拟物品，不需要让用户填写收货地址。实物需要邮寄，要填写收货地址。</span>
            </div>
          </div-->

          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">内容</label>
            <div class="col-sm-10">
              <textarea name="content" class="form-control richtext-clone" cols="70" rows="20"><?php  echo $item['content'];?></textarea>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
               <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
               <input type="submit" name="submit" class="btn btn-default" value="提交"  class="btn btn-primary"/>
               <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
            </div>
          </div>
        </form>
   </div>
</div>


<script language='javascript'>
  require(['jquery', 'util'], function($, u){
    $(function(){
      $('.richtext-clone').each( function() {
        u.editor(this);
      });
    });
  });
</script>

<?php  } else if($operation == 'display') { ?>
<div class="panel panel-default">
      <table class="table">
          <th>排序</th>
          <th>奖品名称</th>
          <th>剩余数量</th>
          <th>价格</th>
          <th>消耗积分</th>
          <th>状态</th>
          <th  style="text-align:right;">操作</th>

      <?php  if(is_array($list)) { foreach($list as $item) { ?>
        <tr>
          <td><?php  echo $item['px'];?></td>
          <td><?php  echo $item['title'];?></td>
          <td><?php  echo $item['amount'];?></td>
          <td><?php  echo $item['price'];?></td>
          <td><?php  echo $item['cost'];?></td>
          <td><?php  if($item['endtime'] < time()) { ?><span class="label label-warning"  data-original-title="超过兑换截止日期， 已经自动下架">已下架</span><?php  } else { ?><span class="label label-success full"  data-original-title="正常接受兑换中" >√</span><?php  } ?></td>
          <td style="text-align:right;">
            <a href="<?php  echo $this->createWebUrl('goods', array('goods_id' => $item['goods_id'], 'op' => 'post'))?>" title="编辑" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i>编辑</a>
            <a href="<?php  echo $this->createWebUrl('goods', array('goods_id' => $item['goods_id'], 'op' => 'delete'))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除" class="btn btn-sm btn-default"><i class="fa fa-remove"></i>删除</a>
          </td>
        </tr>
        <?php  } } ?>
       </table>
 
</div>
<?php  } ?>

<script>
require(['jquery', 'util'], function($, u){
	$(function(){ $('.richtext-clone').each( function() { u.editor(this); });		});
  $('.btn').hover(function(){$(this).tooltip('show');},function(){$(this).tooltip('hide');});
  $('.full').hover(function(){$(this).tooltip('show');},function(){$(this).tooltip('hide');});
});
</script>

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