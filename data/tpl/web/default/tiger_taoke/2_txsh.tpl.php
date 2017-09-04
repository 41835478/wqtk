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
                          <li class="active">佣金提现审核</li>
                        </ul>
			            <!--编辑内容-->
                        <div class="panel panel-info">
                            <div class="panel-heading">导出</div>
                            <div class="panel-body">
                                    <div class="form-group">
                                     <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 200px;"></label>
                                       <a href="<?php  echo $this->createWebUrl('txdownloade')?>" class="btn btn-default">导出【未审核】支付宝(集分宝)提现</a>
                                    </div>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">搜索</div>
                            <div class="panel-body">
                                <form action="<?php  echo $this->createWebUrl('txsh',array('op'=>'seach'))?>" method="post" class="form-horizontal">
                                    <div class="form-group">
                                       <label class="col-xs-12 col-sm-2 col-md-2 col-lg-2 control-label" style="width: 200px;">昵称/openid：</label>
                                        <div class="col-sm-2 col-lg-3">
                                            <input type="text" name="key" value="<?php  echo $key;?>" class="form-control" style="display: inline-block;">
                                        </div>
                                       <button class="btn btn-default">搜索</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                       
<div class="panel panel-default">
      <table class="table">
          <th width="100">粉丝头像</th>
          <th width="350" >昵称</th>
          <th>佣金</th>
          <th>状态</th>
          <th>审核时间</th>
          <th>申请时间</th>
          <th  style="text-align:right;">操作</th>

       <?php  if(is_array($list)) { foreach($list as $item) { ?>
        <tr>
          <td><img src="<?php  echo tomedia($item['avatar'])?>" width="50" height="50" alt=""/></td>
          <td><?php  echo $item['nickname'];?><br>OPENID:<?php  echo $item['openid'];?><Br>支付宝：<span style="color:#ff0000"><?php  echo $item['zfbuid'];?></span></td>
          <td><?php  echo $item['credit2'];?>元</td>
          <td><?php  if($item['sh']==1 ) { ?><span class="label label-warning">已发放</span><?php  } else { ?><span class="label label-success full">审核中</span><?php  } ?></td>
          <td><?php  if($item['addtime']) { ?><?php  echo date('Y-m-d H:i:s',$item['addtime'])?><?php  } ?></td>
          <td><?php  echo date('Y-m-d H:i:s',$item['createtime'])?></td>
          <td style="text-align:right;">
            <?php  if($item['sh']==1 ) { ?><a href="###" title="已审核" class="btn btn-sm btn-primary">已审核</a><?php  } else { ?>
            <a href="<?php  echo $this->createWebUrl('txsh', array('id' => $item['id'], 'op' => 'zfbpost'))?>" title="支付宝审核" class="btn btn-sm btn-danger">支付宝审核</a>
            <a href="<?php  echo $this->createWebUrl('txsh', array('id' => $item['id'], 'op' => 'post'))?>" title="编辑" class="btn btn-sm btn-danger">红包审核</a>
            <?php  } ?>
            <a href="<?php  echo $this->createWebUrl('txsh', array('id' => $item['id'], 'op' => 'delete'))?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" title="删除" class="btn btn-sm btn-default"><i class="fa fa-remove"></i>删除</a>
          </td>
        </tr>
        <?php  } } ?>
       </table>
 <?php  echo $pager;?>
</div>


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